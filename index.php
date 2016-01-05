<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Check Your Current IP Address" />
		<meta name="keywords" content="IP Address , IP , Check Your IP , IP-Address , current ip  " />

		<title> | Your Current IP Address |</title>
		<link href="style.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="js.js"></script>

	</head>
	<body>
	<div id="content">
		<h2>Your Current IP Address Is</h2>
<?php
	if (getenv("HTTP_X_FORWARDED_FOR") != ""){
     $IP = getenv("HTTP_X_FORWARDED_FOR");
     $proxy = getenv("REMOTE_ADDR");
     $host = @gethostbyaddr(getenv("HTTP_X_FORWARDED_FOR"));
}else{
     $IP = getenv("REMOTE_ADDR");
     $host = @gethostbyaddr(getenv("REMOTE_ADDR"));
}
?>		
		<h1><?=$IP;?><br /><small><?=$host;?><br><? echo ($proxy)?$proxy:'';?></small></h1>
		<div id="more">
<?php
	$k = array(user_agent=>HTTP_USER_AGENT,remote_port=>REMOTE_PORT,request_method=>REQUEST_METHOD,protocol=>SERVER_PROTOCOL);
	foreach ($k as $h=>$v)echo "<b>".str_replace("_"," ",$h)."</b> : $_SERVER[$v]<br>";
	?>
		</div>
		
	</div>
<br>
<br>
<br>
<br>
<br>
<font size="2"><a href="http://nareshlamgade.com.np" target="blank">Back To Index</a></font><br>

	</body>
</html>