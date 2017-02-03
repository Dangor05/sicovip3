<?php
/**
* 
*/
class Tramite_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addTramite($agTra)
	{
		$insTra = array('cedp' =>$agTra['cedp'], 'cedc' =>$agTra['cedc'] ,'cons' =>$agTra['cons'] ,'nfin' =>$agTra['nfin'] ,'eml' =>$agTra['eml'], 'pln' =>$agTra['pln'], 'cta' =>$agTra['cta'], 'aut' =>$agTra['aut']);
		$stm=$this->conn->prepare("INSERT INTO sv04reqtos(sv04nfin,sv04apln,sv04aact,sv04acta)VALUES (?,?,?,?)");
		$stm->bind_param("ssss", $insTra['nfin'], $insTra['pln'], $insTra['aut'], $insTra['cta']);
		
	}
}
?>