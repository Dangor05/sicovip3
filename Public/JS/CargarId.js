          $("#ced").focusout(function(){
            $.ajax({
              url:'',
              type:'POST',
              dataType:'json',
              data:{ matricula:$('#ced')}
            }).done(function(respuesta){
              $("#nombre").val(respuesta.nombre);
              $("#paterno").val(respuesta.paterno);
              $("#materno").val(respuesta.materno);
            });
          });


          $("#ced").focusout(function(){
            $.ajax({
              url:'',
              type:'POST',
              dataType:'json',
              data:{ matricula:$('#ced')}
            }).done(function(respuesta){
              $("#nombre").val(respuesta.nombre);
              $("#paterno").val(respuesta.paterno);
              $("#materno").val(respuesta.materno);
            });
          });  