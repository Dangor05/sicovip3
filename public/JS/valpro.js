function validar(){
	var ced, nom, apl, eml, tel, tip;

	ced=document.getElementsById('ced').value;
	nom=document.getElementsById('nom').value;
	apl=document.getElementsById('apl').value;
	eml=document.getElementsById('eml').value;
	tel=document.getElementsById('tel').value;
	tip=document.getElementsById('tip').value;
	var expresion=/^\w+@\w+\.+[a-z]$/;

	if (ced =="" || nom=="" || tip=="") 
	{
		alert("Todos lo cambos son obligarios");
		return false;
	}
	else if (ced.length>15) {
		alert("La Cedula es demasiado larga");
        return false;
	}else if (nom.length>25) {
		alert("El Nombre es demasiado largo");
        return false;
	
		}else if (apl.length>50) {
		alert("El Apellido es demasiado largo");
        return false;
	
		}else if (eml.length>80) {
			alert("El correo es demasiado largo");
			return false;
		}
		else if (!expresion.test(eml)) {
			alert("el correo no es valido");
			return false;
		}

		else if (tel.length>10) {
		alert("El Telefono es demasiado larga");
        return false;
	}    else if (isNaN(tel)) {
        alert("El telefono no es valido");
        return false;
    }
}