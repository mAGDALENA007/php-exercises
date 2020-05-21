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

	// NIEPUBLIKOWANE
	//$unpublishedPosts = array_filter($posts, function ($post) {
	//	return ! $post->published;
	//});

	//PUBLIKOWANE
	$unpublishedPosts = array_filter($posts, function ($post) {
		return $post->published;
	});

	require 'function.php';
	dd($unpublishedPosts);

?>