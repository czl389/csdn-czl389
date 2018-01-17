# -*- coding: utf-8 -*-
import scrapy
from xiami.items import SongInfoItem

class SongInfoSpider(scrapy.Spider):
    name='SongInfo'
    allowed_domains=['xiami.com']
    song_url_file='./result/song_url.csv'
    
    
    def __init__(self, *args, **kwargs):
        #从song_url.csv 文件中读取得到所有歌曲url
        f = open(self.song_url_file,"r") 
        lines = f.readlines()
        #这里line[:-1]的含义是每行末尾都是一个换行符，要去掉
        #这里in lines[1:]的含义是csv第一行是字段名称，要去掉
        song_url_list=[line[:-1] for line in lines[1:]]
        f.close()

        self.start_urls = song_url_list#[:100] # ********去掉[:100]之后获取全部数据
    
    def parse(self,response):
        song_url=response.url
        song_title=response.xpath('//*[@id="title"]/h1/text()').extract_first()
        #singer=response.xpath('//*[@id="albums_info"]/tbody/tr[2]/td[2]/div/a/@title').extract_first()
            
        albums_info = response.xpath('.//table[@id="albums_info"]')
        album=albums_info.xpath('.//a/@title')[0].extract()
        album_url=response.urljoin(albums_info.xpath('.//a/@href')[0].extract())
        
        meta={'song_url':song_url,'song_title':song_title,'album':album}
        
        yield scrapy.Request(url=album_url, meta=meta,callback=self.parse_language)
        
        
    def parse_language(self,response):
        album_info=response.xpath('.//*[@id="album_info"]')
        
        language=album_info.xpath('./table//tr[2]/td[2]/text()').extract_first()
        songinfoitem=SongInfoItem()
        songinfoitem['language']=language
        songinfoitem['song_url']=response.meta['song_url']
        songinfoitem['song_title']=response.meta['song_title']
        songinfoitem['album']=response.meta['album']
        #songinfoitem['singer']=response.meta['singer']
        
        yield songinfoitem
        
       