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