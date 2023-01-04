<?php
	//Using Kirby's HEADER Class to send the XML document header
	Header::contentType("Content-type: text/xml");
	
	//Check if a specific feed was declared in the URL
	if(isset($_GET['feed'])) {
		$feed = $_GET['feed'];
	}else{
		//If no specific feed was declared, use the default "blogposts"
		$feed = "blogposts";
	}
	
	//The feed declared in the URL must exist as a Kirby collection
	$items = $kirby->collection($feed);
	
	//Build a DOM tree for the RSS feed
	//Export the DOM tree as RSS/XML
	echo $items;
?>