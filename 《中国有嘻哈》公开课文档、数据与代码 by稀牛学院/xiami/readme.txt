这是一个scrapy项目，实现虾米音乐嘻哈风格标签歌曲信息的抓取。

包含3个爬虫：SongUrls,SongInfo,Lyrics,分别爬取了歌曲url，歌曲信息，歌词信息。

terminal环境运行scrapy list,可以看到爬虫列表。

为了可靠性和实际效率，采取了分步爬取各项数据的策略，请先运行爬虫SongUrls。

首先运行爬虫SongUrls，scrapy crawl SongUrls -o SongUrls.csv,爬取的结果就会写入到SongUrls.csv。

运行爬虫SongInfo,scrapy crawl SongInfo -o SongInfo.csv,它会将SongUrls.csv中的url作为start_url。
爬取的歌曲信息将写入到SongInfo.csv。

运行第爬虫Lyrics,scrapy crawl Lyrics -o Lyrics.csv,它会将SongUrls.csv中的url作为start_url。
爬取的歌词将写入到Lyrics.csv。