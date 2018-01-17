# -*- coding: utf-8 -*-
import scrapy
import os, json, codecs
from hashlib import md5
from faker import Factory
from music163xiha.items import LyricItem

f = Factory.create()

'''
取得节目列表下所有歌曲信息

提示：歌词 -> 使用 http://music.163.com/api/song/media?id=421203370(歌曲编号)来取得

cd /home/andy/000_music163xiha/scrapy/music163xiha/spiders
pyenv activate scrapy2.7
scrapy crawl songs

'''
class LyricsSpider(scrapy.Spider):
    lyric_url = 'http://music.163.com/api/song/media?id='
    song_list_file='./result/song_url.txt'
    name = "lyrics"
    allowed_domains = ["music.163.com"]
    
    def __init__(self, *args, **kwargs):
        #从上一步骤取得的 song_list 文件中读取得到所有 url
        f = open(self.song_list_file,"r") 
        lines = f.readlines()
        if len(lines)==0:
            self.log('*************\nPlease run spider \'programs\' first\nto get program_url.txt\n****************')
        print '************'
        print len(lines)
        print '************'
        song_id_list=[line.split('=')[1] for line in lines]
        song_list=[self.lyric_url+song_id for song_id in song_id_list]
        f.close()
        print '************'
        print song_list[0]
        print '************'
        self.start_urls = song_list # 此处应从上一步骤取得的 program_list 文件中读取得到所有 url
           
    
    def parse(self, response):
        self.log('--> url:%s' % response.url)
        
        result = response.xpath('//body/text()').extract_first()
        json_result = json.loads(result, encoding='utf-8')
        #self.log('--> lyric:%s' % json_result['lyric'])
        lyric_text=json_result['lyric']#歌词
        
        lyric=LyricItem()
        lyric['lyric']=lyric_text
        lyric['song_id']=response.url.split('=')[1][:-3]#因为‘=’后面的id后面莫名其妙的跟着3个字母%0A，遂去掉，加[:-3]
        yield lyric
        
        

              
'''
{
"songStatus":3,
"lyricVersion":18,
"lyric":"[00:04.630]I won't just survive\n[00:09.500]Oh, you will see me thrive\n[00:14.300]Can't write my story\n[00:18.770]I'm beyond the archetype\n[00:23.710]I won't just conform\n[00:27.950]No matter how you shake my core\n[00:32.980]Cause my roots, they run deep, oh\n[00:39.190]Oh ye of so little faith\n[00:41.660]Don't doubt it, don't doubt it\n[00:43.630]Victory is in my veins\n[00:46.120]I know it, I know it\n[00:48.640]And I will not negotiate\n[00:50.880]I'll fight it, I'll fight it\n[00:53.600]I will transform\n[00:59.470]When, when the fire's at my feet again\n[01:06.420]And the vultures all start circling\n[01:10.900]They're whispering, \"you're out of time.\"\n[01:16.450]But still, I rise\n[01:20.200]This is no mistake, no accident\n[01:25.100]When you think the final end is in, think again\n[01:32.610]Don't be surprised, I will still rise\n[01:39.170]I must stay conscious\n[01:43.580]Through the menace and chaos\n[01:48.300]So I call on my angels\n[01:53.180]They say...\n[01:54.780]Oh ye of so little faith\n[01:57.460]Don't doubt it, don't doubt it\n[01:59.420]Victory is in your veins\n[02:01.890]You know it, you know it\n[02:04.400]And you will not negotiate\n[02:06.720]Just fight it, just fight it\n[02:09.080]And be transformed\n[02:14.640]Cause when, when the fire's at my feet again\n[02:21.640]And the vultures all start circling\n[02:25.970]They're whispering, \"you're out of time.\"\n[02:31.530]But still, I rise\n[02:35.750]This is no mistake, no accident\n[02:40.750]When you think the final end is in, think again\n[02:48.010]Don't be surprised, I will still rise\n[02:53.950]Don't doubt it, don't doubt it\n[02:56.420]Oh oh, oh oh\n[02:58.290]You know it, you know it\n[03:01.000]Still rise\n[03:03.360]Just fight it, just fight it\n[03:07.440]Don't be surprised, I will still rise",
"code":200}
'''
