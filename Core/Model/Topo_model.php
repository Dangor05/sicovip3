<?php 
/**
* 
*/
class Topo_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function insUser($dat)
	{
		$per = array('cdtp' =>$dat['cod'], 'cedt'=>$dat['ced'], 'nomt'=>$dat['nom'],
		             'apdt'=>$dat['apd'], 'estd'=>$dat['estd'], 'pass'=>$dat['pass'],
		             'codu'=>$dat['codu']);
		$stm=$this->conn->prepare("INSERT INTO sv07tpgfo (sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv05codu) VALUES 
        (?,?,?,?,?,?,?)");
        $stm->bind_param("ssssssi", $per['cdtp'], $per['cod'], $per['cedt'], $per['nomt'],
                                          $per['apdt'], $per['estd'],$per['pass'], $per['codu']);
        $stm->execute();

        if($stm->error)
        {
        	echo "Fallo al agregar".$res->error;
        }

        $stm->close();
		$this->conn->close(); 
	}

	public function updUser($upd)
	{
		$actu = array('cdtp' =>$upd['cod'], 'cedt'=>$upd['ced'], 'nomt'=>$upd['nom'], 'apdt'=>$upd['apd'], 'estd'=>$upd['estd'], 'pass'=>$upd['pass'], 'codu'=>$upd['codu']);
		$stm=$this->conn->prepare("UPDATE sv07tpgfo SET `sv07cedt`= ?,`sv07nomt`= ?,`sv07apdt`=?,`sv07estd`= ?,`sv07pass`= ?,`sv05codu`= ? WHERE `sv07cdtp`= ?");
		$stm->bind_param("sssssis", $actu['cod'], $actu['cedt'],$actu['nomt'],
		                                  $actu['apdt'], $actu['estd'], $actu['pass'], $actu['codu'],$actu['cdtp']);
		$stm->execute();
        if($stm->error)
        {
        	echo "Fallo al agregar".$res->error;
        }
        $stm->close();
		$this->conn->close(); 
	}

	public function upUse($act)
	{
		$up = array('cdtp' =>$act['cod'], 'cedt'=>$act['ced'], 'nomt'=>$act['nom'], 'apdt'=>$act['apd'], 'pass'=>$act['pass']);
		$stm=$this->conn->prepare("UPDATE `sv07tpgfo` SET `sv07nomt`= ?,`sv07apdt`= ?,`sv07pass`= ? WHERE `sv07cdtp`= ?");
		$stm ->bind_param("ssss", $up['nomt'], $up['apdt'], $up['pass'], $up['cdtp']);
		$stm->execute();

		$stm->close();
		$this->conn->close(); 
	}

	public function actUser($id)
	{
		$acti=$id;
		$stm=$this->conn->prepare("UPDATE sv07tpgfo  SET sv07estd='1' WHERE sv07cdtp=?");
		$stm->bind_param("s",$acti);
		$stm->execute();

		$stm->close();
		$this->conn->close(); 
	}


	public function desUser($id)
	{
		$des=$id;
		$stm=$this->conn->prepare("UPDATE sv07tpgfo  SET sv07estd='2' WHERE sv07cdtp=?");
		$stm->bind_param("s",$des);
		$stm->execute();

		$stm->close();
		$this->conn->close(); 
	}


	public function getTopo()
	{
		$result=$this->conn->query("SELECT *FROM sv07tpgfo");

		$per = $result->fetch_all(MYSQLI_ASSOC);

		return $per;
	}
}
?>