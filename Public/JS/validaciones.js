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

function valrequi()
{
    var cedp=document.getElementById('ced').value;
    var fin= document.getElementById('fin').value;

    if (cedp==="") {
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

    if (tip===1) {
        if (ced==="" || nom==="" || apl==="" || eml==="" tel==="") {
            alert("todos los espacios son obligatorios");
            return false;
        }
    }
}
