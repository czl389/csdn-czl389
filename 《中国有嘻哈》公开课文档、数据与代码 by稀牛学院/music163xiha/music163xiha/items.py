# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/en/latest/topics/items.html

import scrapy


class ProgramItem(scrapy.Item):
    # define the fields for your item here like:
    # name = scrapy.Field()
    program_url=scrapy.Field() #节目链接
    issue=scrapy.Field() #期号
    create_time=scrapy.Field() #创建时间
    play_times=scrapy.Field() #播放次数
    subscription_number=scrapy.Field() #订阅次数
    like_number=scrapy.Field() #点赞数
    comment_number=scrapy.Field() #评论数
    share_number=scrapy.Field() #分享数
    
class SongItem(scrapy.Item):
    song_id=scrapy.Field() #歌曲编号
    artist_id=scrapy.Field() #歌手编号
    album_id=scrapy.Field() #所属专辑编号
    comment_number=scrapy.Field() #评论数
    title=scrapy.Field() #歌曲名

class LyricItem(scrapy.Item):
    song_id=scrapy.Field() #歌曲编号
    lyric=scrapy.Field() #歌词
    
#class SongCommentItem(scrapy.Item):
#    song_id=scrapy.Field() #歌曲唯一编号
#    user_name=scrapy.Field() #用户名
#    content=scrapy.Field() #评论内容
#    zan=scrapy.Field() #评论点赞数
#    time=scrapy.Field() #评论时间