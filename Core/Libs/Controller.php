<?php

	class Controller{
		function __construct(){
			//Session::init();
			$this->view = new View();
			$this->loadModel();	//forma de acceder a metodos propios de la clase
		}

		function loadModel(){
			$model = get_class($this).'_model';//significa que todos los modelos se llamaran ejm CarroModel
			$path = './models/'.$model.'.php';

			if(file_exists($path)){
				require $path;
				$this->model = new $model();
			}else{
				echo "A la picha todo";
			}	
		}
	} 

?>