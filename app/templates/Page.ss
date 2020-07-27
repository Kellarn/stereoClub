<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<% base_tag %>
	$MetaTags(false)
	<title>Stereo Club: $Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	
	<!-- IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<!-- Google Web Font -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<div class="MainPage">
		<header class="MainPage__header">
			<% include TopImage %>	
		</header>
		$Layout	
		<div class="MainPage__bottom">
			<% include BottomSection %>			
			<% include Footer %>
		</div>	
	</div>
</body>
</html>