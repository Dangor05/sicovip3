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