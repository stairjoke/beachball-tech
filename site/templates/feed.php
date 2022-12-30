<?php
$options = [
		'url' => site()->url(),
		'feedurl' => site()->url() . '/feed/',
		'title' => 'Beachball.tech Feed',
		'description' => '',
		'link' => site()->url(),
		'urlfield' => 'url',
		'titlefield' => 'title',
		'datefield' => 'date',
		'textfield' => 'text',
		'modified' => time(),
		'snippet' => 'feed/json', // 'feed/json'
		'dateformat' => 'r',
		'mime' => null,
		'sort' => true,
];
	$blogposts = $kirby->collection('blogposts');
	echo $blogposts->feed($options);
?>