<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="./css/hello.css" type="text/css" />
		<title>Hello, NIFTYCloud C4SA!</title>
	</head>
    <div class="content">
	<body>
		<h1>Hello, NIFTYCloud C4SA!</h1>
<?php 
	mb_language("uni");
	mb_internal_encoding("utf-8");
	mb_http_input("auto");
	mb_http_output("utf-8");
	$date = date('l jS \of F Y h:i:s A');
	$str = $date.'にHello, NIFTYCloud C4SAしました。';
	print<<<EOF
<p>
$str<br>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-url="http://{$_SERVER['SERVER_NAME']}/hello.php" data-text="$str" data-count="none" data-hashtags="niftycloudc4sa" data-related="niftycloud_c4sa:NIFTYCloud C4SA">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</p>
EOF;
?>
	</body>
	</div>
</html>