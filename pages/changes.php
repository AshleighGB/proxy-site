<html>
<link href="/themes/2015/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/themes/2015/css/metro-bootstrap.css">
<link rel="stylesheet" href="/themes/2015/css/font-awesome.min.css">
<link rel="stylesheet" href="/themes/2015/css/metro-bootstrap-responsive.css">
<link rel="stylesheet" href="/src/examples.css">
<link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" 
rel="stylesheet" />
<!-- Metro JS Core Files -->
<script src="/themes/2015/js/metro-core.js"></script>
<script src="/themes/2015/js/metro-loader.js"></script>
<script src="/themes/2015/js/metro-scroll.js"></script>
<script src="//code.jquery.com/jquery-1.4.2.min.js" ></script>
<style type="text/css">
	#header h1{display: inline;}
	#title1{ font-size: 26px; font-weight : 200; color: #3b5999;}
	#title2{ font-size: 26px; font-weight: 100; color: white;}
	/* GLOBAL ELEMENTS */
	.header{color: white;}
	html,body{margin: 0; padding: 0;font-size: 100%;font-family: "trebuchet ms", arial, verdana;color: 
#fff;text-align: center;}
	a {color: #f2f;text-decoration:none;}
	a:hover {text-decoration: underline;}
	p {color: #444;line-height: 170%; margin: 5px 0;}
	p, td, th, ul {font-size: 80%;}
	/* LAYOUT */
	#wrapper {width: 700px;margin: 0 auto 0 auto;text-align: left;}
	#content {background: #fff;border-top: 3px solid #ffffff;border-bottom: 3px solid #ffffff;border-
left: 3px solid #ffffff;border-right: 3px solid #ffffff;padding: 20px;}
	/* ELEMENTS */
	h1 {font: 250% "trebuchet ms";color: #fff;padding: 40px 0 10px 10px;margin: 0;}
	h1 span {color: #6BAD42;}
	h1 a {color: #f2f;}
	h1 a:hover {color: #f2f;text-decoration: none;}
	h1 a:hover span {color: #f2f;}
	h2 {font: bold 100% arial, verdana, sans-serif;color: #ffffff;border-bottom: 0px solid 
#ccc;padding-bottom: 3px;margin: 25px 0 10px 0;}
	p+p {padding-top: 1em;}
	form.form {font-size: 80%;background-color: #ffffff;padding: 0px;}
	#options {list-style-type: none;width: 500px;margin: 10px; padding: 0;}
	#options li {float: left;width: 240px;border-left: 5px solid #ccc;}
	#footer {margin: 10px 0 0 0;font-size: 80%;color: #ccc;}
	#nav {text-align: right;list-style-type: none;font-size: 80%;margin: 20px 0 0 0;padding: 0;}
	#nav li {padding: 0 5px 0 5px;display: inline;}
	.left {float: left;}
	.right{float: right;}
	/* STYLES */
	.first {margin-top: 0;}
	input.textbox {background: #f5f5f5; width: 80%; height: 40px; font: 120% arial, verdana, sans-
serif;border: 1px solid #ffffff;}
	.button{height: 40px;}
	input.button {margin-top: 10px;font-family: arial, verdana, sans-serif;font-size: 120%;border: 2px 
solid #333;border-left: 2px solid red;width: 80px;}
	label {font-weight: light;}
	#error {border: 1px solid red;border-left: 3px solid red;padding: 2px;margin: 5px 0 15px 
0;background: #eee; color: black;}
	/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
	table {border-color: #666;border-width: 0 0 1px 1px;border-style: solid;width: 50%;}
	th {font-size: normal;background: #ccc;border-width: 2px;}
	td, th {border-color: #666;border-width: 1px 1px 0 0;border-style: solid;padding: 2px 10px 2px 
10px;}
	td {background-color: #EEEEEE;}
	.full-width {width: 98%;}
	.large-table {width: 75%;margin-top: 15px;}
	.large-table td, .large-table th {padding: 5px;}
	td.small-note {font-size: 60%;padding: 2px;text-align: right;}
	/* TOOLTIP HOVER EFFECT */
	label {font-weight: bold;line-height: 20px;cursor: help;}
	#tooltip {width: 20em;color: #fff;font-size: 12px;font-weight: normal;padding: 5px;border: 3px solid 
#333;text-align: left; background: #555555;}
	.pink {color: white; background: #f2f; border: 1px solid #f2f;}
	.loaded{padding: 10px; margin: 10 auto 10 auto; display: none;}
	.content{width: 90%; background: #333333;}
	#content{Width: 90%;}
	.tall{height: 40px;}
	#tall{height: 40px;}
	#navigation{width: 90%; background: #00aff0;}
	#li0n{background: #00aff0;}
	#li0n:hover{background: #000000;}
	#metro{background: #333333;}
	p#content{color: black;}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" 
type="text/javascript"></script>
<script src="/src/jquery.idletimer.js" type="text/javascript"></script>
<script src="/src/jquery.idletimeout.js" type="text/javascript"></script>
<body class="metro" id="metro">
<center><div id="loading" class="loading bg-blue tall" style="display: none; color: white;"><i class="fa 
fa-refresh fa-spin" style="font-size: 20px;"></i> &nbsp; Loading...</div>
<div class="loaded bg-blue tall" id="loaded" style="color: white;"><i class="fa fa-check" style="font-size: 
20px;"></i>Page Loaded. </div>
<div class="pageload bg-blue tall" id="pageload" style="color: white; display: none;"><i class="fa fa-info" 
style="font-size: 20px;"></i>Loading Page...</div>
</center>
<div id="wrapper" class="wrapper">
<div id="timeout" class="timeout bg-blue tall" style="display: none; color: white;"><i class="fa fa-refresh 
fa-spin" style="font-size: 20px;"></i> &nbsp; you have been idle for 2 minutes</div>
	<div id="header"> <h3 style="color: white;">Secure Proxy</h3>
	</div>
		<div id="navigation" class="navigation bg-blue tall" style="color: white;">
		<ul id="nav">
			<li><a href="/index.php" class="bg-blue li0n" style="color: 
#ffffff;">Home</button></li>
			<li><a href="/settings/edit-browser.php"  class="bg-blue li0n" style="color: #ffffff;">Edit 
Browser</a></li>
			<li><a href="/settings/cookies.php"  class="bg-blue li0n" style="color: #ffffff;">Manage 
Cookies</a></li>
			<li><a class="bg-blue li0n" style="color: #ffffff;" href="/pages/disclaimer.php" 
>Disclaimer</a></li>        
			<li><a style="color: #ffffff;" class="bg-blue li0n" href="/pages/changes.php" 
>Recent Site Changes</a></li>     
		</ul>
</div>
<div id="content">
	<a href="javascript:window.reload();">Refresh</a><br>
	<a href="javascript:window.location.href('https://mysslproxy.co.uk/');">Go home</a><br>
	This Page refreshed less than a minute ago. <br>
<?php 
	header('cache-control: no-cache');
	header('pragma: no-cache');
	header('Refresh: 30');

	echo '<p>No changes as of 29/1/2015</p><br>';
?>
</div>

</body>
</html>