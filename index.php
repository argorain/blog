<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
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
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
				<a href="somewhere">some&nbsp;menu</a>
			</div>
			<div id="sitename">
				Vojtech Vladyka
			</div>
			<div id="subtitle">
				<hr size="5" color="black" align="center"/>
				Student's, technician's & artist's blog
				<hr size="5" color="black" align="center"/>
			</div>
		</div>
		<div class="content">
		<?php

			$file='articles/prvni.xml';
		    if (file_exists($file))
		    {
		    	$article = simplexml_load_file($file);
		    	echo "<h1>",$article->title,"</h1>";

		    	echo "<div class=\"tags\">Tags: ";
		    	$size=sizeof($article->tags->tag);
		    	$count=0;
		    	foreach ($article->tags->tag as $tag) {
		    		$count++;
		    		echo "<a href=\"link\">",$tag,"</a>";
		    		if($count<$size)
		    			echo ", ";
		    	}
		    	echo "</div>";

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
			Proudly written in Sublime Text 3 by Vojtech "Rain" Vladyka &copy 2014.
		</div>
	</div>
</body>
</html>