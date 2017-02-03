<?php
/**
* 
*/
class Propietario_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addPropietario($agPro)
	{
		$inspro = array('cedp' =>  $agPro['cedp
			'], 'nomp' =>  $agPro['nomp'], 'apdp' =>  $agPro['apdp'], 'emp' =>  $agPro['emp'], 'telp' =>  $agPro['telp'], 'codp' =>  $agPro['codp']);
		$stm=$this->conn->prepare("INSERT INTO sv03ptario(sv03cedp,sv03nomp,sv03apdp,sv03emp,sv03telp,sv06codp)	VALUES (?,?,?,?,?,?)");
		$stm->bind_param("sssssi", $inspro['cedp'], $inspro['nomp'], $inspro['apdp'], $inspro['emp'], $inspro['telp'], $inspro['codp']);
		$stm->execute();
		$stm->close();
		$this->conn->close();
	}
	public function upPropietario($acPro)
	{
		$uppro = array('cedp' =>  $acPro['cedp
			'], 'nomp' =>  $acPro['nomp'], 'apdp' =>  $acPro['apdp'], 'emp' =>  $acPro['emp'], 'telp' =>  $acPro['telp'], 'codp' =>  $acPro['codp']);
		$stm=$this->conn->prepare("UPDATE sv03ptario SET sv03nomp= ?,sv03apdp= ?,sv03emp= ?,sv03telp= ?,sv06codp= ? WHERE sv03cedp= ?");
		$stm->bind_param("ssssis",$uppro['nomp'], $uppro['apdp'], $uppro['emp'], $uppro['telp'], $uppro['codp'], $uppro['cedp']);
		$stm->execute();
		$stm->close();
		$this->conn->close();
	}

	public function delPropietario($id)
	{
		$per = $id;
			$stm = $this->conn->prepare("DELETE FROM sv03ptario WHERE id =?");
			$stm->bind_param("s", $per);
			$stm->execute();
			if($statement->execute() or die($this->conn->error))
			{
				echo "Fallo al eliminar";
			}
			else{
				echo "Se elimino correctamente";
			}	
		$stm->close();
		$this->conn->close();
	}
}
?>