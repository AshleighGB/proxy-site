<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<script type="text/javascript">
    if (window.location.protocol == "http:") {
        var restOfUrl = window.location.href.substr(5);
        window.location = "https:" + restOfUrl;
    }
</script>
<?php
$checkSession = $_GET['PROXYSESSID'];
$csrfValid = $_GET['cs'];
$csrfToken = mt_rand();
$randomID = mt_rand();
$redirect = $_GET['redirect'];
if($checkSession && $csrfValid) {
  // we're all good here!
} else {
  header('Location: /?PROXYSESSID='.$randomID.'&cs='.$csrfToken);
}
if($redirect) {
header('Location: '.$redirect);
}
?>
<?php session_start(); ?>
		<!--[if lte IE 8]><script src="/css/ie/html5shiv.js"></script><![endif]-->
		<script src="/js/jquery.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/jquery.scrolly.min.js"></script>
		<script src="/js/jquery.scrollgress.min.js"></script>
		<script src="/js/skel.min.js"></script>
		<script src="/js/skel-layers.min.js"></script>
		<script src="/js/init.js"></script>
<style>
.message:empty {display: none;}
</style>
<!-- End -->
<title>Loading dayt.se ...</title>
<meta name="description" content="<!--[meta_description]-->">
<meta name="keywords" content="<!--[meta_keywords]-->">
<?=injectionJS();?>
</head>
<body class="index" style="overflow: hidden;" style="width: 100%; height: 100%;">
<form action="/includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form" id="siteaccess">
<input type="text" name="u" id="input" size="40" class="textbox" autofocus="false" style="border: 1px solid #ffffff; display: none;" value="http://xpau.se">
			<br style="clear: both;">
		</form>
	<div id="footer" style="display:none;">
		Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.
	</div>
</body>
</html>
