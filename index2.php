<?php

class Task {

	public $description; //chcę wyświetlić na html
	public $completed = false;

	public function __construct($description) 
	{
		$this->description = $description; 
	} // function

	public function complete() 
	{
		$this->completed = true;
	}
	
	public function isComplete()
	{
		return $this->completed; 
	}

} //class

$tasks = [							//	ARRAY
	new Task('Go to the store'),
	new Task('Prepare dinner'),
	new Task('Give meat my children')
	];

$tasks[0]->complete(); // pierwsza czynność WYKONANA


	require '001partials/index.class.php';
?>