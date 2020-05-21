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
		new Post('My 5 Post', false)
	];

	// NIEPUBLIKOWANE filtrowanie
	//$unpublishedPosts = array_filter($posts, function ($post) {
	//	return ! $post->published;
	//});

	//PUBLIKOWANE filtrowanie
	//$unpublishedPosts = array_filter($posts, function ($post) {
	//	return $post->published;
	//});

	//array_map wyświetli wszystkie recordy jako true ALL
	//$modified = array_map(function ($post) {
	//	$post->published = true;
	//	return $post;
	//}, $posts);

	//array_map wyświetli wszystkie recordy jako true z foobar
	//$modified = array_map(function ($post) {
	//	return 'foobar'; 	//wydrukuję wszystkie rocordy
	//	$post->published = true;
	//	return $post;
	//}, $posts);

	//array_map kolekcja obiektów, np tytuły
	$modified = array_map(function ($post) {
		return ['title' => $post->title];
	}, $posts);

	require 'function.php';
	dd($modified);

?>