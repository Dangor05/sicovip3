<?php 
class View{
	public function render($controller,$view)
	{
		$controller = get_class($controller);
		//views/User/index.php
		require './views/'.$controller.'/'.$view.'.php';
	}

	public function showindex($view)
	{
		require './views/Index/'.$view.'.php';
	}

	public function showview($view)
	{
		require './views/'.$view.'.php';
	}
	
}

?>