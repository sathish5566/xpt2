<?php

$getData = file_get_contents("https://www.pornhub.com/embed/".$_GET['id']);
$getData = explode('"videoUrl":"', $getData);

if(!isset($getData[1])) {
	echo "error";
	// exit;
}

$getData = explode('"}],', $getData[1]);
$VideoUrl = str_replace("\/", "/", $getData[0]);

$getVideoDetails = json_decode(file_get_contents('http://178.162.218.201:8082/solr/videos/select?q=*:*&fq=uniqueKey:'.$_GET['id']),true);
$getVideoDetails = $getVideoDetails['response']['docs'][0];
print_r($getVideoDetails);

$thumb = $getVideoDetails['thumb'];


?>
<html>
<head>
<link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">
<!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
<script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
</head>

<body>
<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
poster="<?php echo $thumb; ?>" data-setup="{}">
<source src="<?php echo $VideoUrl; ?>" type='video/mp4'>
<p class="vjs-no-js">
To view this video please enable JavaScript, and consider upgrading to a web browser that
<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
</p>
</video>
<script src="https://vjs.zencdn.net/7.1.0/video.js"></script>
<script src="./node_modules/videojs-brand/dist/videojs-brand.min.js"></script>
<script src="./node_modules/videojs-chromecast/dist/videojs-chromecast.js"></script>

</body>
</html>