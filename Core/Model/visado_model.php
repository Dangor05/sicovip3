<?php
/**
* 
*/
class Visado_model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addVisado($vis){
		$pre = array('npln'=>$vis['npla'], 'fol'=>$vis['nfol'], 'npre'=> $vis['npre'],'$mnt'=>$vis['mnt'],
			        'fvdp'=>$vis['fvdp'], 'conse'=>$vis['conse'], 'cedc'=>$vis['cedc'], 'cedp'=>$vis['cedp'],
			        'nfin'=>$vis['nfin'], 'code'=>$vis['code'], 'cdtp'=>$vis['cdtp'], 'codu'=>$vis['codu']);

		$stm= $this->conn->prepare("INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) 
			VAlUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stm->bind_param("ssssssssssss", );//terminars

		
	}

	public function agreMinuta($cedp,$mntd){
		$dir ='C:\apache\htdocs\Visado\archivos/'.$cedp.'/';
		if (file_exists($dir)) {
			move_uploaded_file($mntd['tmp_name'],$dir.$mntd['name']);
		}else{
			mkdir($dir,7055);
			move_uploaded_file($mntd['tmp_name'],$dir.$mntd['name']);
		}
		
	}
}
?>