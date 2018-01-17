这是一个scrapy项目，实现网易云音乐中国嘻哈榜电台歌曲信息的抓取。

包含3个爬虫：Programs,Songs,Lyrics,分别爬取了电台节目信息，歌曲信息，歌词信息。

terminal环境运行scrapy list,可以看到爬虫列表。

为了可靠性和实际效率，采取了分步爬取各项数据的策略，请依次运行一下爬虫。

首先运行第1个爬虫，scrapy crawl Programs -o programs.csv,爬取的结果就会写入到programs.csv。
同时会自动生成program_url.txt文件。

然后运行第2个爬虫scrapy crawl Songs -o songs.csv,它会将program_url.txt中的url作为start_url。
爬取的歌曲信息将写入到songs.csv。同时会自动生成song_url.txt文件。

运行第3个爬虫scrapy crawl lyrics -o Lyrics.csv,它会将song_url.txt中的url作为start_url。
爬取的歌词将写入到lyrics.csv。