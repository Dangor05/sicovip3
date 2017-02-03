<?php 
/**
* 
*/
class Cliente_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addCliente($agcli)
	{
		$inscli = array('cedc' =>$agcli['cedc'],'cdtp'=>$agcli['cdtp'], 'nomc'=>$agcli['nomc
			'], 'apdc'=>$agcli['apdc'], 'emc'=>$agcli['emc'], 'telc'=>$agcli['telc']);
		
		$stm=$this->conn->prepare("INSERT INTO sv01clnte(sv01cedc,sv01cdtpc,sv01nomc,sv01apdc,sv01emc,sv01telc) 
	VALUES (?,?,?,?,?,?)");
		$stm->bing_param("ssssss",$inscli['cedc'], $inscli['cdtp'], $inscli['nomc'], $inscli['apdc'], $inscli['emc'], $inscli['telc']);

		$stm->execute();

        if($stm->error)
        {
        	echo "Fallo al agregar".$res->error;
        }

        $stm->close();
		$this->conn->close(); 
	}

	public function upCliente($acCli)
	{
		$upcli = array('cedc' =>$acCli['cedc'],'cdtp'=>$acCli['cdtp'], 'nomc'=>$acCli['nomc
			'], 'apdc'=>$acCli['apdc'], 'emc'=>$acCli['emc'], 'telc'=>$acCli['telc']);
		$stm=$this->conn->prepare("UPDATE sv01clnte SET sv01cdtpc= ?,sv01nomc= ?,sv01apdc = ?,sv01emc = ?,sv01telc= ? WHERE sv01cedc = ?");
		$stm->bind_param("ssssss",$upcli['cdtp'], $upcli['nomc'], $upcli['apdc'], $upcli['emc'], $upcli['telc'], $upcli['cedc']);
		$stm->execute();

		if ($stm->error) {
			echo "Fallo al agregar".$res->error;
		}

		$stm->close();
		$this->conn->close(); 
	}

	public function delCliente($id)
	{
		$per = $id;
			$stm = $this->conn->prepare("DELETE FROM sv01clnte WHERE id =?");
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