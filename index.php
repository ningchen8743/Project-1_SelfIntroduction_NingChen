<?php require('p1-logic.php');?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<title>Ning Chen's self-introduction</title>
	<meta charset='utf-8'>
	
	<link rel="stylesheet" href='css/style.css'>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>
	<h1>Ning Chen</h1>
	
	<div class="clearfix">
	<img class='img' src='/images/profile.JPG' alt='Profile Photo'>
	<h2 class="self_intro">About Me</h2>
	<p>My name is Ning Chen, I am originally from Beijing, China. After several years of study and working in the US since 2011, I am currently living in the upstate NY with my husband. In the past few years I have been working as a GIS analyst for Norfolk Southern Corp in Atlanta, GA.<br><br>
	I love to spend my spare time practicing harp on daily basis, and yoga+swimming are my choices of exercise. I studied urban design in college so field sketch has always been a hobby whenever I travel to somewhere.<br><br>
	The profile image was drawn by my husband, the bunny playing the harp is me. <i class="em em-blush"></i>
	</p>
	</div>
	<br>
	<div class="quotes">
	<h2 class="quotes">Quote</h2>
	<p class="quote_font"><?php echo $quote_array[$random_key];?></p>
	</div>
	
</body>

</html>