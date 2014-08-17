<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vojtech Vladyka</title>
	<meta name="description" content="Knock Knock - žonglování & fireshow">
	<meta name="author" content="Vojtech Rain Vladyka">
	<meta name="keywords" content="fireshow, juggling, zonglovani, ohen, poi, diabolo, group, show" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta property="og:image" content="facebook.png" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php echo "<link rel=\"stylesheet\" href=\"style.css?v=".time()."\">\n"; ?>
	<link href="favicon.ico" rel="icon" type="image/png" />
</head>
<body>
	<div class="page">
		<div class="header">
			<div id="menu">
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
				<a href="somewhere">some menu</a>
			</div>
			<div id="sitename">
				Vojtech Vladyka
			</div>
			<div id="subtitle">
				Student's, technician's & artist's blog
			</div>
		</div>
		<div class="content">
		<?php

			$file='articles/prvni.xml';
		    if (file_exists($file))
		    {
		    	$article = simplexml_load_file($file);
		    	echo "<h1>";
		    	echo $article->title;
		    	echo "</h1>";
		    	echo $article->content;
			}
			else
			{
				echo '<div class="error">';
				echo 'Wrong filename.'; /*TODO add some good error warning. */
				echo '</div>';
			}
		?>
		</div>
		<div class="footer">
			Proudly written in Sublime Text 3.
		</div>
	</div>
</body>
</html>