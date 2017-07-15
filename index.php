<?php
	error_reporting(0); // not required but sometimes needed.
	function tidy($i){
		$i=strstr($i, '?taken-by=');
		if(strpos($i, '?taken-by=') !== false) {
			$i=str_replace("?taken-by=","",$i);
			return '<a href="https://www.instagram.com/'.$i.'">'.$i.'</a>\'s';
		}
		else{
			return '';
		}
	}
	function p1($i) {
		if (strpos($i,'instagram.com/p/') !== false) {
			return $i;
		} else {
			return false;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Snuffle!</title>
<link rel="stylesheet" type="text/css" href="ig.css" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!--<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">-->
<link href="snuffle.png" rel="apple-touch-icon" />
<link href="snuffle.png" rel="apple-touch-icon" sizes="76x76" />
<link href="snuffle.png" rel="apple-touch-icon" sizes="120x120" />
<link href="snuffle.png" rel="apple-touch-icon" sizes="152x152" />
<link href="snuffle.png" rel="apple-touch-icon" sizes="180x180" />
<link href="snuffle.png" rel="icon" sizes="192x192" />
<link href="snuffle.png" rel="icon" sizes="128x128" />
<script src="jquery.js"></script>
<script>$(document).ready(function(){$('#iOSMessage').hide();Check10();if(window.location.hash){$('#url').val(window.location.hash.replace("#",""));}else{}});</script>
<script src="v.js"></script>
</head>
<body onload="getInstagram()">
	<h1><a href="/tools/snuffle">Snuffle!</a></h1>
	<span class="mesg">Snuffle for Instagram&trade; uploads with ease</span>
	<?php if(!$_GET['url']) {
	 echo '<form action="" method="get">
			<input type="text" name="url" id="url" placeholder="Enter URL" /><br/>
			<input type="submit" id="submit" value="Submit" />
		</form>';
	}
	else { 
		if(p1($_GET['url'])!=false) {
	echo '<div id="tobalt">
		<div class="meter">
			<span style="width: 100%"></span>
		</div>
		<span class="mesg">Fetching image from '.tidy($_GET['url']).' Instagram.</span>
	</div>
	<script src="ig.js"></script>
	<p id="urlscheme"></p>
	<p id="thumb"></p>';
	}
		else {
			echo '
	<br/><br/><br/><br/>
	<span class="mesg2 error">ERROR: Snuffle can only accept Instagram URLs, please check your input and try again.</span>
	'; 
		}
	}
	?>
	<br/><br/><span class="mesg2 alert" id="iOSMessage">Sorry, BETA versions of iOS are not supported by Snuffle.<br/>Please downgrade to a stable/public release if you wish to use this service.</span>
	<br/><br/><span class="mesg2">Instagram&reg; is a registered trademark of Instagram Inc, a Subsiduary of Facebook Inc. No copyright infringment is intended.<br/> Snuffle, makes use of publicly available API's and does not infringe on any private technologies.<br/>Use of this tool and to what end is determined by the end user.</span>
</body>
</html>