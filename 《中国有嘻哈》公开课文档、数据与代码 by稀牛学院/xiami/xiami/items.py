# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/en/latest/topics/items.html

import scrapy


class SongUrlItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    song_url=scrapy.Field() #歌曲链接

class LyricItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    lyric=scrapy.Field() #歌曲链接
    song_url=scrapy.Field() #歌曲链接
    
    
class SongInfoItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    song_url=scrapy.Field() #歌曲链接
    song_title=scrapy.Field() #歌名
    album=scrapy.Field() #专辑
    #singer=scrapy.Field() #歌手
    language=scrapy.Field() #语种
    
    
