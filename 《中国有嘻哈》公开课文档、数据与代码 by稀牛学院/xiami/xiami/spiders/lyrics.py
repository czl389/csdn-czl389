# -*- coding: utf-8 -*-
import scrapy
from xiami.items import LyricItem

class LyricsSpider(scrapy.Spider):
    name='Lyrics'
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

        self.start_urls = song_url_list#[:100]#删除[:100]之后爬取全部数据
    
    def parse(self,response):
        
        lyric_lines=response.xpath('//*[@id="lrc"]/div[1]/text()').extract()
        lyric=''
        for lyric_line in lyric_lines:
            lyric+=lyric_line
        #print lyric
        
        lyricItem=LyricItem()
        lyricItem['lyric']=lyric
        lyricItem['song_url']=response.url
        yield lyricItem
       