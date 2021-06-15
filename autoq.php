<?php
header("Content-Type: application/vnd.apple.mpegurl");
echo '#EXTM3U'.PHP_EOL;
echo '#EXT-X-VERSION:3'.PHP_EOL;
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=400000,RESOLUTION=854x480'.PHP_EOL;
echo 'http://localhost/m3u8.php?c='.$_GET['c'].'&q=400&e=.m3u8'.PHP_EOL;
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=600000,RESOLUTION=1024x576'.PHP_EOL;
echo 'http://localhost/m3u8.php?c='.$_GET['c'].'&q=600&e=.m3u8'.PHP_EOL;
echo '#EXT-X-STREAM-INF:PROGRAM-ID=1,CLOSED-CAPTIONS=NONE,BANDWIDTH=800000,RESOLUTION=1280x720'.PHP_EOL;
echo 'http://localhost/m3u8.php?c='.$_GET['c'].'&q=800&e=.m3u8'.PHP_EOL;


?>