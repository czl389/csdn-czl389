# -*- coding: utf-8 -*-
import re
import scrapy
from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from xiami.items import SongUrlItem

class SongUrlsSpider(scrapy.Spider):
    name='SongUrls'
    allowed_domains=['xiami.com']
    
    #将page/1到page/401，这些链接放进start_urls
    start_url_list=[]
    url_fixed='http://www.xiami.com/song/tag/Hip-Hop/page/'
    #将range范围扩大为1-401，获得所有页面
    for i in range(1,402):
        start_url_list.extend([url_fixed+str(i)])
    start_urls=start_url_list
    
    def parse(self,response):
        urls=response.xpath('//*[@id="wrapper"]/div[2]/div/div/div[2]/table/tbody/tr/td[2]/a[1]/@href').extract()
        for url in urls:
            song_url=response.urljoin(url)
            url_item=SongUrlItem()
            url_item['song_url']=song_url
            yield url_item
       
    

