<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.youtube.com/iframe_api"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="/css/MyFontsWebfontsKit.css">
    <link rel="stylesheet" href="/css/MyFontsWebfontsKit3.css">
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
	<div id="footer"></div>
	<script src="/js/test.js"></script>
</body>
</html>