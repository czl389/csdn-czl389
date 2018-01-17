# -*- coding: utf-8 -*-
import scrapy
from music163xiha.items import ProgramItem

'''
取得 网易云音乐电台《中国嘻哈榜》 下所有节目列表

cd /home/andy/000_music163xiha/scrapy/music163xiha/spiders
pyenv activate scrapy2.7

scrapy runspider programs.py

nohup scrapy crawl playlist > log/playlist.log 2>&1 &

tail -f /home/andy/000_music163/scrapy/music163/spiders/log/playlist.log
'''
class ProgramsSpider(scrapy.Spider):
    radio_url = 'http://music.163.com/djradio?id=169' # 网易云音乐电台《中国嘻哈榜》
    program_list_file='./result/program_url.txt'
    
    name = "programs" # 节目列表
    
    allowed_domains = ["music.163.com"]
    start_urls = [radio_url]
             
    def __init__(self, *args, **kwargs):
        super(ProgramsSpider, self).__init__(*args, **kwargs)
        f=open(self.program_list_file,'a+')
        f.truncate()
        f.close()
        # ...

    def parse(self, response):
        self.log('--> [parse]url:%s' % response.url)
        list_urls = response.xpath('//div[@class="tt f-thide"]/a/@href').extract()
        self.log('--> [parse]url[0]:%s' % list_urls[:1])
        for program_url in list_urls:
            yield scrapy.Request(url=response.urljoin(program_url), callback=self.parse_program)
            
        #将节目url写入文本文件program_list.txt
        for program_url in list_urls:
            f=open(self.program_list_file,'a+')
            f.write(response.urljoin(program_url)+'\n')
            f.close()
            
        #解析下一个页面
        next_page = response.xpath('.//a[@class="zbtn znxt"]/@href').extract_first()
        if next_page <> None:
            yield scrapy.Request(response.urljoin(next_page), callback=self.parse)

    def parse_program(self, response):
        self.log('--> [parse_program]url:%s' % response.url)
        title = response.xpath('//div[@class="tit tit3"]/h2/text()').extract()
        self.log('--> title:%s' % title)
        
        program_url=response.url #节目链接
        issue=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[2]/div[2]/strong/text()').extract_first() #期号
        create_time=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[2]/div[2]/span[1]/text()').extract_first() #创建时间
        play_times=response.xpath('//*[@id="play-count"]/text()').extract_first()#播放次数
        subscription_number=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[1]/div[2]/div/div/div[2]/span/a/i/text()').extract_first() #订阅次数
        like_number=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[2]/div[1]/a[2]/i/span/text()').extract_first() #点赞数
        comment_number=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[2]/div[1]/a[3]/i/text()').extract_first() #评论数
        share_number=response.xpath('//*[@id="module-root"]/div[1]/div/div/div[2]/div[1]/a[4]/i/text()').extract_first() #分享数
        
        program=ProgramItem()
        program['program_url']=program_url
        program['issue']=issue
        program['create_time']=create_time
        program['play_times']=play_times
        program['subscription_number']=subscription_number
        program['like_number']=like_number
        program['comment_number']= comment_number
        program['share_number']=share_number
        
        yield program
        
