<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">this is logo block</div>
		<div class="contact">this is contact block</div>
	</header>
	<section>
		<div class="leftbar">
			<ul>
				<li><a href="index.php?page=home">Home Page</a></li>
				<li><a href="index.php?page=about-page">About</a></li>
				<li><a href="index.php?page=personlist-page">Person List</a></li>
				<li><a href="index.php?page=addperson-page">Add Person</a></li>

				<li><a href="index.php?page=addmessage-page">Add Message</a></li>
				<li><a href="index.php?page=messagelist-page">Message List</a></li>
			</ul>
		</div>
		<div class="mainbar">
			<?php echo $content;?> 
		</div>
		<div class="rightbar">This is right bar</div>
	</section>
	<footer>
		This is footer
	</footer>
</body>
</html>