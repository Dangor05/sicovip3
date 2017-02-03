<?php

class Index_model extends Model
{
	
   function __construct()
	{
		parent::__construct();
	}

	public function ini($log)
	{
		$per= array('usuario' => $log['user'], 'password' => $login['pass']);
		$stm = $this->conn->prepare("SELECT sv07cdtp, sv05codu, sv07estd  FROM sv07tpgfo WHERE sv07cdtp = ? AND sv07pass = ?");
		$stm->bind_param("ss",$per['usuario'], $per['password']);
		$stm->execute();
		if($stm->execute() or die($this->conn->error))
		{
			print "<script>alert(\"El nombre o contraseña son incorrectos.\");</script>";
		}else{
			print "<script>alert(\"Bienvenidos.\");</script>";
		}
		$stm->close();
		$this->conn->close(); 
		/*$result=$con->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['sv07cdtp'] = $row['sv07cdtp'];
			$_SESSION['sv05codu'] = $row['sv05codu'];
			$std = $row['sv07estd'];
			mysqli_close($con);
			
						if($std==1)
			{
				header("Location: ../verlista.php"); 
			}

			else{
			print "<script>alert(\"El usuario no tiene permisos de ingresar al sistema.\");window.location='../Index.php';</script>";
		}
		
			} else {
						print "<script>alert(\"El nombre o contraseña son incorrectos.\");window.location='../index.php';</script>";
		}*/

	}

	public function srchVisado($val)
	{
		$result=$this->conn->query(" SELECT DISTINCT a.sv03apdp,a.sv03nomp,a.sv03cedp,
                b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta,
                c.sv08conse,c.sv08fchs,c.sv08fumt,c.sv04nfin,c.sv02code
    
    FROM sv03ptario a, sv04reqtos b,sv08trmte c
    WHERE a.sv03cedp=c.sv03cedp AND b.sv04nfin=c.sv04nfin  AND  c.`sv03cedp`=$_GET[s]
	ORDER BY sv08fchs DESC");

		$per = $result->fetch_all(MYSQLI_ASSOC);

		return $per;
	}
}
?>