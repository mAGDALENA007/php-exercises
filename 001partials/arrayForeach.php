<?php
	class Post 
	{
		public $title;

		public $published;

		public function __construct($title, $published)
		{
			$this->title = $title;
			$this->published = $published;
		}
	}

	$posts = [
		new Post('My First Post', true),
		new Post('My 2 Post', true),
		new Post('My 3 Post', true),
		new Post('My 4 Post', false),
		new Post('My 5 Post', false),
	];

	foreach ($posts as $post) {
		$post->published = true;
	}

	require 'function.php';
	dd($posts);

?>