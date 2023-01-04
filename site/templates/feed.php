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
	
	//---Return XML file that is built once or create XML on the fly---
	//A: Build a DOM tree for the RSS feed -> Echo it
	//B: Check if XML file exists and is more recent than most recent post. Generate file if it is old.
	
	//Blog is not getting many views yet, using A for now.
	
	//$rss = new DOMDocument();
	//Do stuff
	//echo $rss->saveXML();
?>