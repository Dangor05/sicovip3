function validarSelect(){
var indice = document.getElementById("Rol").value;

if(indice == 0) {
  alert('puto');
  window.location.assign("http://www.w3schools.com");
}else{
	if(indice == 1){
		//document.location.href = "../Views/registroPaciente.php";
		//setTimeout('location.href=/"../Views/registroPaciente.php/"', 2000);
		location.replace("http://www.stackoverflow.com");
	}else{
		//document.location.href = "../Views/registroFuncionario.php";
		window.location ="http://blog.arsys.es/codigos-de-ejemplo-para-redirigir-tu-sitio-web/";
	}
	
   }	
}

	$('#enviar').click(function(e){
		e.preventDefault();
		agregarPersona();
	});

	$('#modificar').click(function(e){
		e.preventDefault();
		modificarPersona();
	});

	$('#modificarCli').click(function(e){
		e.preventDefault();
		modificarCliente();
	});

	$('#modificarVis').click(function(e){
		e.preventDefault();
		modificarVisado();
	});

	$('#modificarPro').click(function(e){
		e.preventDefault();
		modificarPropietario();
	});

	$('#modificarUsu').click(function(e){
		e.preventDefault();
		modificarUsuario();
	});
	$('#modificarPerfil').click(function(e){
		e.preventDefault();
		modificarPerfilUsuario();
	});




	$('#eliminar').click(function(e){
		e.preventDefault();
		eliminarPersona();
	});

//document.form.indice.selectedIndex==0

function agregarPersona(){//va a agregar por ajax ejecuta la peticion
		
	var nombre = $('form[name=Persona] input[name=nombre]')[0].value;
	var email = $('form[name=Persona] input[name=email]')[0].value;

	$.ajax({
		type: 'POST',
		url: "<?php echo URL; ?>Persona/AgregarPersona", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {nombre: nombre, email:email}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarPersona(){//va a agregar por ajax ejecuta la peticion

	var id = $('form[name=Modificar] input[name=id]')[0].value; //ir al formulario con ese id y obtener el campo con ese id
	var nombre = $('form[name=Modificar] input[name=nombre]')[0].value;
	var email = $('form[name=Modificar] input[name=email]')[0].value;

	$.ajax({
		type: 'POST',
		url: "<?php echo URL; ?>Persona/ModificarPersona", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {id: id, nombre: nombre, email:email}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function eliminarPersona(){//va a agregar por ajax ejecuta la peticion

	var id = $('form[name=Eliminar] input[name=id]')[0].value; //ir al formulario con ese id y obtener el campo con ese id

	$.ajax({
		type: 'POST',
		url: "<?php echo URL; ?>Persona/EliminarPersona", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {id: id}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarCliente(){//va a agregar por ajax ejecuta la peticion

	var sv01cedc = $('form[name=ModCli] input[name=sv01cedc]')[0].value; //ir al formulario con ese id y obtener el campo con ese id
	var sv01cdtpc= $('form[name=ModCli] input[name=sv01cdtpc]')[0].value;
	var sv01nomc = $('form[name=ModCli] input[name=sv01nomc]')[0].value;
	var sv01apdc = $('form[name=ModCli] input[name=sv01apdc]')[0].value;
	var sv01emc = $('form[name=ModCli] input[name=sv01emc]')[0].value;
	var sv01telc =$('form[name=ModCli] input[name=sv01telc]')[0].value;

	$.ajax({
		type: 'POST',
		url: "<?php echo URL; ?>Cliente/update", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {sv01cedc: sv01cedc, sv01cdtpc: sv01cdtpc, sv01nomc:sv01nomc, sv01apdc:sv01apdc, sv01emc:sv01emc, sv01telc:sv01telc}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarVisado(){//va a agregar por ajax ejecuta la peticion

	var sv09npln = $('form[name=ModVis] input[name=sv09npln]')[0].value; //ir al formulario con ese id y obtener el campo con ese id
	var sv09nfol = $('form[name=ModVis] input[name=sv09nfol]')[0].value;
	var sv09npre = $('form[name=ModVis] input[name=sv09npre]')[0].value;
	var sv09mnt = $('form[name=ModVis] input[name=sv09mnt]')[0].value;
	var sv09fvdp = $('form[name=ModVis] input[name=sv09fvdp]')[0].value;
	var sv09fumv = $('form[name=ModVis] input[name=sv09fumv]')[0].value;
	var sv08conse = $('form[name=ModVis] input[name=sv08conse]')[0].value;
	var sv03cedp = $('form[name=ModVis] input[name=sv03cedp]')[0].value;
	var sv04nfin = $('form[name=ModVis] input[name=sv04nfin]')[0].value;
	var sv02code = $('form[name=ModVis] input[name=sv02code]')[0].value;
	var sv02code = $('form[name=ModVis] input[name=sv02code]')[0].value;
	var sv02code = $('form[name=ModVis] input[name=sv02code]')[0].value;
	var sv07cdtp = $('form[name=ModVis] input[name=sv07cdtp]')[0].value;
	var sv05codu = $('form[name=ModVis] input[name=sv05codu]')[0].value;

	$.ajax({
		type: 'POST',
		url: "<?php echo URL; ?>Visado/update", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {sv09npln: sv09npln, sv09nfol: sv09nfol, sv09npre:sv09npre, sv09mnt:sv09mnt, sv09fvdp:sv09fvdp, sv09fumv:sv09fumv, sv08conse:sv08conse, sv03cedp:sv03cedp, sv04nfin:sv04nfin, sv02code:sv02code, sv02code:sv02code, sv02code:sv02code,sv07cdtp:sv07cdtp, sv05codu}
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarPropietario(){//va a agregar por ajax ejecuta la peticion

	var sv03cedp = $('form[name=ModProp] input[name=sv03cedp]')[0].value; //ir al formulario con ese id y obtener el campo con ese id
	var sv03nomp = $('form[name=ModificaModPropr] input[name=sv03nomp]')[0].value;
	var sv03apdp = $('form[name=ModificaModPropr] input[name=sv03apdp]')[0].value;
	var sv03emp = $('form[name=ModProp] input[name=sv03emp]')[0].value;
	var sv03telp = $('form[name=ModProp] input[name=sv03telp]')[0].value;
	var sv06codp = $('form[name=ModProp] input[name=sv06codp]')[0].value;

	$.ajax({
		type: 'POST',
		url: "<?php echo URL;?>Propietario/updatePropietario", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {sv03cedp: sv03cedp, sv03nomp: sv03nomp, sv03apdp:sv03apdp, sv03emp:sv03emp, sv03telp:sv03telp, sv06codp:sv06codp} 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarUsuario(){//va a agregar por ajax ejecuta la peticion

	var sv07cdtp = $('form[name=ModUser] input[name=sv07cdtp]')[0].value; //ir al formulario con ese id y obtener el campo con ese id
	var sv07cedt = $('form[name=ModUser] input[name=sv07cedt]')[0].value;
	var sv07nomt = $('form[name=ModUser] input[name=sv07nomt]')[0].value;
	var sv07apdt = $('form[name=ModUser] input[name=sv07apdt]')[0].value;
	var sv07estd = $('form[name=ModUser] input[name=sv07estd]')[0].value;
	var sv05codu = $('form[name=ModUser] input[name=sv05codu]')[0].value;
	var sv07pass = $('form[name=ModUser] input[name=sv07pass]')[0].value;


	$.ajax({
		type: 'POST',
		url: "<?php echo URL;?>Topo/update", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {sv07cdtp: sv07cdtp, sv07cedt: sv07cedt, sv07nomt:sv07nomt, sv07apdt:sv07apdt, sv07estd:sv07estd, sv05codu:sv05codu, sv07pass:sv07pass}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}

function modificarPerfilUsuario(){//va a agregar por ajax ejecuta la peticion

	var sv07cdtp = $('form[name=ModPerf] input[name=sv07cdtp]')[0].value;
	var sv07cedt = $('form[name=ModPerf] input[name=sv07cedt]')[0].value;
	var sv07nomt = $('form[name=ModPerf] input[name=sv07nomt]')[0].value;
	var sv07apdt = $('form[name=ModPerf] input[name=sv07apdt]')[0].value;
	var sv07pass = $('form[name=ModPerf] input[name=sv07pass]')[0].value;


	$.ajax({
		type: 'POST',
		url: "<?php echo URL;?>Topo/configuracion", //vaya a la aplicacion pregunta por el controller y ejecuta su accion 
		data: {sv07cdtp: sv07cdtp, sv07cedt: sv07cedt, sv07nomt:sv07nomt, sv07apdt:sv07apdt, sv07pass:sv07pass}//se crea un objeto js 
	}).done(function(response){ //funcion para avisar si se hizo o no el insert
		if(response == true){//se compara bool porque el metodo insert de mysqlimanager devuelve o true o false
			alert("Exito");
		}else{
			alert(response);//por mysqlimanager va a mostrar el error
		}
	});
}