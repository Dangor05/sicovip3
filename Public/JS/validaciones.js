function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8))
}


    function Letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}

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

function valterm()
{
    var check=document.getElementById('check').value;

    if (check==="") {
        alert("Debes aceptar las condiciones de nuestro sistema para continuar con el registro");
        return false;
    }
}

function valtramite()
{
    var cedp=document.getElementById('ced').value;
    var fin= document.getElementById('fin').value;

    if (cedp=="") {
        alert("Debes llenar el propietario");
        return false;
    }
}

function valpropie()
{
    var ced=document.getElementById('ced').value;
    var nom=document.getElementById('nom').value;
    var apl=document.getElementById('apl').value;
    var eml=document.getElementById('eml').value;
    var tel=document.getElementById('tel').value;
    var tip=document.getElementById('tip').value;

    
        if (ced==="" || nom==="" || apl==="" || eml==="" tel==="") {
            alert("todos los espacios son obligatorios");
            return false;
        }
    
}

function valvisa()
{
    var expReFolio=/^[A-Z]{1,3}+[0-9]$/;
    var expReNPlano=/^[A-Z]{1}+[0-9]+[0-9]{4}$/;
    var expRePre=/^[0-9]{1}+[0-9]{3}+[0-9]{3}$/;
    var expReNMinta=/^[0-9]{1}+[0-9]+[0-9]{4}/;
    var excedulaN=/^[0-9]{1}+0+[0-9]{3}+0+[0-9]$/;

    var Npln=document.getElementById("").value;
    var Nfol=document.getElementById("").value;
    var Npre=document.getElementById("").value;
    var Minuta=document.getElementById("").value;
    var fch=document.getElementById("").value;
    var cons=document.getElementById("").value;
    var client=document.getElementById("").value;
    var prop=document.getElementById("").value;
    var NFin=document.getElementById("").value;
    var CIT=document.getElementById("").value;

    if (!Npln || !Nfol || !Npre || !fch) || !cons || !client ||!prop || !NFin || !CIT) {
    alert("Todos los campos son requeridos");
}

    else if (!Npln) {
        alert("### es requerido");
    }
    else if (!Nfol) {
        alert("### es requerido");
    }
    else if (!Npre) {
        alert("### es requerido");
    }
    else if (!fch) {
        alert("### es requerido");
    }
    else if (!cons) {
        alert("### es requerido");
    }
    else if (!client) {
        alert("### es requerido");
    }
    else if (!prop) {
        alert("### es requerido");
    }
    else if (!NFin) {
        alert("### es requerido");
    }
    else if (!CIT) {
        alert("### es requerido");
    }


}
