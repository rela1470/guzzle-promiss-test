Guzzleの並列ダウンロードがうまく動かない


```Mac
> php -v
PHP 8.1.9 (cli) (built: Oct 12 2022 22:07:00) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.9, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.9, Copyright (c), by Zend Technologies
    with Xdebug v3.1.5, Copyright (c) 2002-2022, by Derick Rethans

> php index.php
2023-04-17 08:37:07
[Set] http://ipv4.download.thinkbroadband.com/5MB.zip ...  done!
[Set] http://ipv4.download.thinkbroadband.com/5MB.zip ...  done!
[Set] http://ipv4.download.thinkbroadband.com/5MB.zip ...  done!
[Set] http://ipv4.download.thinkbroadband.com/5MB.zip ...  done!
[Set] http://ipv4.download.thinkbroadband.com/5MB.zip ...  done!
2023-04-17 08:37:08
Download start...
[Download]0 fulfilled
[Download]1 fulfilled
[Download]2 fulfilled
[Download]3 fulfilled
[Download]4 fulfilled
2023-04-17 08:37:14
```