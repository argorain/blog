<?php


$file='vojtechvladyka.wordpress.2014-05-23.xml';
if (file_exists($file)) 
{
   	$article = simplexml_load_file($file);
   	echo "loaded.<br>";
   	foreach ($article->channel->item as $item) 
   	{
		echo "working<br>";
		foreach ($item as $key) 
		{
			echo $key->content,"<br>";
		}
		echo "<br><br><br>";
	}
}else
{
	echo "error. file not found.<br>";
}
/*$xml = new DOMDocument();
$xml_album = $xml->createElement("Album");
$xml_track = $xml->createElement("Track");
$xml_album->appendChild( $xml_track );
$xml->appendChild( $xml_album );

$xml->save("test.xml");
*/
?>