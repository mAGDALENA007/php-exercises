<?php
	class Post 
	{
		public $title;

		public $author;

		public $published;

		public function __construct($title, $author, $published)
		{
			$this->title = $title;
			$this->author = $author;
			$this->published = $published;
		}
	}

	$posts = [
		new Post('My First Post', 'MM', true),
		new Post('My 2 Post', 'KM', true),
		new Post('My 3 Post', 'GD', true),
		new Post('My 4 Post', 'AD', false),
		new Post('My 5 Post', 'TD', false),
	];

	//array_map zwraca tytuły
	//$titles = array_map(function ($post) {
	//	return $post->title;
	//}, $posts);

	//inny sposób array column wyświetla wszystkie tytuły
	//$titles = array_column($posts, 'title');

	//posts zamiana na array:
	//foreach ($posts as $index => $post)
	//{
	//	$posts[$index] = (array) $post;
	//}

	//inny sposób zmiany posts na tablicę = wychodzi tak samo jak wcześniej
	// author - KEY - wynik wyciągnięcia danych
	$posts = array_map(function ($post) {
		return (array) $post;
	}, $posts);

	$author = array_column($posts, 'author', 'title');

	require 'function.php';
	dd($author);

?>