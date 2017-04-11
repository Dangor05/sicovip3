function validar(){
	var npln, fol, pred;

	npln=document.getElementsById('npln').value;
	fol=document.getElementsById('fol').value;
	pred=document.getElementsById('pred').value;
	var expReFolio=/^[A-Z]{1,3}+[0-9]$/;
    var expReNPlano=/^[A-Z]{1}+[0-9]+[0-9]{4}$/;
    var expRePre=/^[0-9]{1}+[0-9]{3}+[0-9]{3}$/;
    var expReNMinta=/^[0-9]{1}+[0-9]+[0-9]{4}/;



	if (npln =="" || fol=="" || pred=="") 
	{
		alert("Todos lo cambos son obligarios");
		return false;
	}
	else if (npln.length>15) {
		alert("La Cedula es demasiado larga");
        return false;
	}
	else if (!expReNPlano.test(npln) || !expReNMinta.test(npln)) {
			alert("La minuta no es valida");
			return false;
	}
	else if (!expReFolio.test(fol)) {
			alert("El folio no es valida");
			return false;
	}

}