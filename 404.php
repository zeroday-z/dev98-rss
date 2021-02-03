<?php
$loadrss = 'https://dev98.de/feed/';
define('TITLE', 'dev98 &#8211; a blog of the netz98 developer team');
include ('inc/Feed.php');
include ('inc/header.php');
?>

<div class="mainpart">
  <body>
    <?php require_once './inc/nav.php'; ?>
       <div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h3>Oops! Page not found</h3>
				<h1><span>4</span><span>0</span><span>4</span></h1>
			</div>
			<p class="lead small-p">we are sorry, but the page you requested was not found</p>
		</div>
	</div>
</body>
