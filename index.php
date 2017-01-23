<?php
	$path = realpath(".");
	//get the list of all files with .jpg extension in the directory and safe it in an array named $images
	$jpgs = glob( $path . "/images/photos/*.jpg" );
	//get the list of all files with .png extension in the directory and safe it in an array named $images
	$pngs = glob( $path . "/images/photos/*.png");
	//get the list of all files with .gif extension in the directory and safe it in an array named $images
	$gifs = glob( $path . "/images/photos/*.gif");

	$images = array_merge( $jpgs,$pngs,$gifs);
	sort($images);
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="host_name" content="http://www.lintern.us">
	<title>The Linterns</title>
	<link rel="icon" type="image/png" href="images/L.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" href="https://dev.nretnil.com/staging/tools/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="https://dev.nretnil.com/staging/bluevioletmuleinfluenceplayground/beigedormousemultiplyteeth/font-awesome-4/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href="style/fonts.css?v=1.0.0" rel="stylesheet">
	<link type="text/css" href="style/style.css?v=1.0.1" rel="stylesheet">
</head>

<body onload="$('.loading').hide();">
	<div class="loading" style="position: absolute; top: 0; bottom: 0; right: 0; left: 0; background: #000; color: #fff; z-index: 1000;"><i class="fa fa-4x fa-spinner fa-spin" style="position: absolute; top: 50%; left: 50%; margin-left: -23px;"></i></div>

	<div class="email">
		<a target="_blank" id="email-icon" href="http://mail.lintern.us"></a>
		<a target="_blank" href="http://album.lintern.us"><img src="images/pink-rattle.png" width="63px" /></a>
	</div>
	<div class="social">
		<a target="_blank" id="twitter" href="http://twitter.com/mlintern"></a>
		<a target="_blank" id="facebook" href="http://facebook.com/mark.lintern"></a>
		<a target="_blank" id="instagram" href="http://instagram.com/mlintern"></a>
	</div>

	<div class="container-fluid">
		<div class="header">
			<div class="apple header-text">Linterns</div>
		</div> 
		<div class="row picture-container">
			<?php
			$count = 0;
			foreach( $images as $image ):
				$src = str_replace($path."/", "", $image);
				$imgDirs = array("R","L");
				$tackDirs = array("right","left");
				$colors = array("green","red","black","yellow","blue","white");
				$tackDir = $tackDirs[array_rand($tackDirs)];
				echo "<div id='pic" . $count . "' class='little-polaroid rotate" . $imgDirs[array_rand($imgDirs)] . "10'><div class='" . $tackDir . "-tack " . $tackDir . "-" . $colors[array_rand($colors)] . "-tack'></div><div class='inner'><img class='small' src='" . $src . "?v=1.0.0'/></div></div>";
				$count++;
			endforeach;
			?>
		</div>
		<div class="footer row">
			<div class="footer-email">mark@lintern.us</div>
		</div> <!-- footer -->
	</div> <!-- container_12 -->

	<script type="text/javascript" src="scripts/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="scripts/windows-console.js"></script>
	<script type="text/javascript" src="scripts/popuppolaroid.js"></script>
	<script type="text/javascript" src="scripts/show-hide.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i.GoogleAnalyticsObject=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments);},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m);
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-39640034-1', 'lintern.us');
		ga('send', 'pageview');
	</script>
</body>
</html>
