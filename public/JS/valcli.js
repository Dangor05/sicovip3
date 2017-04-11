function valciente()
{
      var ced = document.getElementById('ced').value;
      var cit = document.getElementById('cit').value;
      var nom = document.getElementById('nom').value;
      var ape = document.getElementById('ape').value;
      var ema = document.getElementById('ema').value;
      var tel = document.getElementById('tel').value;
      var pass= document.getElementById('pass').value;
      var vps=document.getElementById('vpass').value;

      var expresion=/^\w+@\w+\.+[a-z]$/;

    if (nom ==="" || ape ===""||ema ==="" || cit ==="" || ced==="" || tel ==="" || pass==="" || vps==="") {
        alert("Todos los campos son obligatorios");
        return false;
    }
     else if (pass.length<8) {
        alert("La contraseña es demasiado corta, use una mas larga");
        return false;
    }
    else if (pass != vps) {
        alert("Las contraseñas no son iguales");
        return false;
    }
    else if (nom.length>30) {
        alert("El nombre es demasiado largo");
        return false;
    }

    else if (ape.length>80) {
        alert("El nombre es demasiado largo");
        return false;
    }
    else if (ema.length>100) {
        alert("El nombre es demasiado largo");
        return false;
    }
    else if (!expresion.test(ema)) {
        alert("el correo no es valido");
        return false;
    }
    else if (cit.length>20) {
        alert("El nombre es demasiado largo");
        return false;
    }
    else if (tel.length>30) {
        alert("El nombre es demasiado largo");
        return false;
    }
    else if (isNaN(tel)) {
        alert("El telefono no es valido");
        return false;
    }
}