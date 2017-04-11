<?php 
include("php/conexion.php");
		$stmt="SELECT sv04apln, sv04aact, sv04acta FROM sv04reqtos WHERE sv04nfin='543218'";
		$exec=$con->query($stmt);
		if($exec->num_rows>0) {
			while ($r=$exec->fetch_array()) {
				$cart=$r['sv04acta'];
				$dib=$r['sv04aact'];
				$pln=$r['sv04apln'];
				break;				
			}
		}

		echo $cart;
		echo "<br>";
		echo $dib;
		echo "<br>";
		echo $pln;
 ?> 