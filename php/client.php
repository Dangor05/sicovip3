<?php

include 'Database.php';

class client extends DataBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function buscar($usuario){
        $datos = array();
        $sth = $this->prepare('SELECT * FROM sv01clnte '.'WHERE sv01cedc LIKE "%'.$usuario.'%" ');
        $sth->execute();
        $result = $sth->fetchAll();
        
        foreach ($result as $key => $value) {
            $datos[] = array("value" => $value['sv01cedc'],
                "codigo" => $value['sv01cdtpc'], 'nombre'=> $value['sv01nomc'],'apellido'=>$value['sv01apdc'],
                'email'=>$value['sv01emc'], 'tel'=>$value['sv01telc']);
        }
        
        return $datos;
        
    }
    
}