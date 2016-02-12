<html>
<head>
   <title>401 Authorization Required</title>
   <style type="text/css">

#title1{ font-size: 16px; font-weight: 200; color: white;}
#title2{ font-size: 16px; font-weight: 100; color: white;}
	/* GLOBAL ELEMENTS */
	.header{color: white;}
	html,body {
		margin: 0; padding: 0;
		background: #333333;
		font-size: 100%;
		font-family: "trebuchet ms", arial, verdana;
		color: #fff;
		text-align: center;
	}
	a {
		color: #f2f;
		text-decoration:none; 
	}
	a:hover {
		text-decoration: underline;
	}
	p {
		color: #444;
		line-height: 170%; margin: 5px 0;
	}
	p, td, th, ul {
		font-size: 80%;
	}
	
	/* LAYOUT */
	#wrapper {
		width: 700px;
		margin: 0 auto 0 auto;
		text-align: left;
	}
	
	#content {
		background: #fff;
		border-top: 3px solid #f2f;
		border-bottom: 3px solid #f2f;
		border-left: 3px solid #f2f;
		border-right: 3px solid #f2f;
		padding: 20px;
	}
	
	/* ELEMENTS */
	h1 {
		font: 250% "trebuchet ms";
		color: #fff;
		padding: 40px 0 10px 10px;
		margin: 0;
	}
	h1 span {
		color: #6BAD42;
	}
	h1 a {
		color: #f2f;
	}
	h1 a:hover {
		color: #f2f;
		text-decoration: none;
	}
	h1 a:hover span {
		color: #f2f;
	}
	h2 {
		font: bold 100% arial, verdana, sans-serif;
		color: #ffffff;
		border-bottom: 0px solid #ccc;
		padding-bottom: 3px;
		margin: 25px 0 10px 0;
	}
	p+p {
		padding-top: 1em;
	}
	form.form {
		font-size: 80%;
		background-color: #f5f5f5;
		padding: 0px;
	}
	#options {
		list-style-type: none;
		width: 500px;
		margin: 10px; padding: 0;
	}
	#options li { 
		float: left;
		width: 240px;
		border-left: 5px solid #ccc;
	}
	#footer {
		margin: 10px 0 0 0; 
		font-size: 80%;
		color: #ccc;
	}
	#nav {
		text-align: right;
		list-style-type: none;
		font-size: 80%;
		border-top: 1px solid #ccc;
		margin: 20px 0 0 0;
		padding: 0;
	}
	#nav li {
		padding: 0 5px 0 5px;
		display: inline;
		border-left: 1px solid #ccc;
	}
	.left {
		float: left;
	}
	
	/* STYLES */
	.first {
		margin-top: 0;
	}
	input.textbox {
		background: #cccccc;
		width: 80%;
		height: 40px;
		font: 120% arial, verdana, sans-serif;
		border: 1px dashed #fff;
	}
	.button{height: 40px;}
	input.button {
		margin-top: 10px;
		font-family: arial, verdana, sans-serif;
		font-size: 120%;
		border: 2px solid #333;
		border-left: 2px solid red;
		width: 80px;	
	}
	label {
		font-weight: light;
	}
	#error {
		border: 1px solid red;
		border-left: 3px solid red;
		padding: 2px;
		margin: 5px 0 15px 0;
		background: #eee;
	}
	
	/* TABLES USED IN COOKIE MANAGEMENT / EDIT BROWSER PAGES */
	table {
		border-color: #666;
		border-width: 0 0 1px 1px;
		border-style: solid;
		width: 50%;
	}
	th {
		font-size: normal;
		background: #ccc;
		border-width: 2px;
	}
	td, th {
		border-color: #666;
		border-width: 1px 1px 0 0;
		border-style: solid;
		padding: 2px 10px 2px 10px;
	}
	td {
		background-color: #EEEEEE;
	}
	.full-width {
		width: 98%;
	}
	.large-table { 
		width: 75%; 
		margin-top: 15px;
	}
	.large-table td, .large-table th {
		padding: 5px;
	}
	td.small-note {
		font-size: 60%;
		padding: 2px;
		text-align: right;
	}
	
	/* TOOLTIP HOVER EFFECT */
	label {
		font-weight: bold;
		line-height: 20px;
		cursor: help;
	}
	#tooltip {
		width: 20em;
		color: #fff;
		font-size: 12px;
		font-weight: normal;
		padding: 5px;
		border: 3px solid #333;
		text-align: left;
		background-color: #555555;
	}
   </style>
   <base href="<?php echo GLYPE_URL; ?>/">
</head>
<body>
   <div id="wrapper">
      <h1>Authorization Required</h1>
      <p>The site <strong><?php echo $site; ?></strong> is requesting a username and password to access the realm "<strong><?php echo $realm; ?></strong>".</p>
      <form action="includes/process.php?action=authenticate" method="post">
         <label for="user">Username:</label>
         <input type="text" name="user" id="user">
         <label for="pass">Password:</label>
         <input type="password" name="pass" id="pass">
         <input type="submit" value="Submit">
         
         <input type="hidden" name="site" value="<?php echo $site; ?>">
         <input type="hidden" name="return" value="<?php echo $return; ?>">
      </form>      
   </div>
</body>
</html>