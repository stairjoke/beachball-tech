<head>
	<meta property="og:title" content="<?= $site->title() ?>">
	<meta property="og:site_name" content="<?= $page->title() ?>">
	<meta property="og:url" content="<?= $page->url() ?>">
	<meta property="og:description" content="<?php
		if($page->ogdescription()->isNotEmpty()) {
			echo($page->ogdescription());
		}else{
			echo($site->ogdescription());
		}
	?>">
	<meta property="og:type" content="blog">
	<?php
		if($page->ogimageALT()->isNotEmpty() && $page->ogimage()->isNotEmpty()){
			echo('<meta property="og:image" content="'. $page->ogimage() .'">');
			echo('<meta content="'. $page->ogimageALT() .'" property="og:image:alt">');
		}else{
			echo('<meta property="og:image" content="/OGDefault.png">');
			echo('<meta content="Beachball.tech Logo" property="og:image:alt">');
		}
	?>

	
	<meta content="Geht nicht? Gibt’s nicht. Als programmierender UI & UX Designer bin ich die Eierlegende Wollmilchsau, die gerade für kleine Unternehmen Kosten spart." name="description">
	<meta content="Wenzel Massag" name="author">
	<meta content="index, follow" name="robots">
	
	
	<link href="/appIcons/apple-180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="/appIcons/android-192.png" rel="icon" sizes="192x192" type="image/png">
	
	<link href="/favicon32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="/favicon96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="/favicon16.png" rel="icon" sizes="16x16" type="image/png">
	
	<meta content="#FCFCFC" name="msapplication-TileColor">
	<meta content="/appIcons/ms-144.jpg" name="msapplication-TileImage">
	
	<meta content="#0059FF" name="theme-color">
	<meta content="black-translucent" name="apple-mobile-web-app-status-bar-style">
	
	<title><?= $site->title() ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= css('assets/css/style.css') ?>
</head>