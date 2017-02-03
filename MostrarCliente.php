<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<TITLE>SICOVIP</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Assets/datatables.min.css">
<script src="<?php echo URL;?>public/js/jquery-1.11.0.min.js"></script>
 <link rel="stylesheet" href="<?php echo URL;?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo URL;?>assets/css/bootstrap-theme.min.css" />
<link rel="stylesheet" href="<?php echo URL;?>assets/js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" href="<?php echo URL;?>assets/js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" href="<?php echo URL;?>assets/css/style.css" />
        
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="well well-sm text-right">
    <a class="btn btn-primary" href="<?php echo URL;?>Cliente/agreCliente">Nuevo alumno</a>
</div>

<div id="list"></div>
<script>
    $(document).ready(function(){
        var agrid = $("#list").anexGrid({
            class: 'table-striped table-bordered',
            columnas: [
                { style: 'width:48px;' },
                { leyenda: 'CIT', columna: 'CIT'},
                { leyenda: 'Cedula', columna: 'Cedula', style: 'width:240px;' },
                { leyenda: 'Nombre', columna: 'Nombre', style: 'width:70px;', ordenable: true },
                { leyenda: 'Apellido', columna: 'Apellido', style: 'width:120px;', ordenable: true },
					{leyenda: 'email', columna: 'email', ordenable: true},
						{ leyenda: 'Telefono', columna: 'Telefono'
                { style: 'width:60px;' },
                { style: 'width:80px;' },
            ],
            modelo: [
                { propiedad: 'Foto', formato: function(tr, obj, celda){
                    if(celda == '') return '';
                    
                    return anexGrid_imagen({
                        src: 'uploads/' + celda,
                        style: 'width:48px;'
                    });
                }},
                { propiedad: 'Nombre', formato: function(tr, obj, celda){
                    return obj.Nombre + ' ' + obj.Apellido;
                }},
                { propiedad: 'Correo' },
                { propiedad: 'Sexo', formato: function(tr, obj, celda){
                    return celda == 1 ? 'Hombre' : 'Mujer';
                }},
                { propiedad: 'FechaNacimiento', class: 'text-right' },
                { formato: function(tr, obj, celda){
                    return anexGrid_link({
                        class: 'btn-primary btn-xs btn-block',
                        contenido: 'Editar',
                        href: '?c=Alumno&a=Crud&id=' + obj.id
                    });    
                }},
                { formato: function(tr, obj, celda){
                    return anexGrid_boton({
                        class: 'btn-danger btn-xs btn-block btn-eliminar',
                        contenido: 'Eliminar',
                        value: tr.data('fila')
                    });    
                }},
            ],
			url: '<?php echo URL;?>Cliente/album',
            paginable: true,
            limite: 20,
            columna: 'id',
            columna_orden: 'DESC'
        })
        
        agrid.tabla().on('click', '.btn-eliminar', function(){
            if(!confirm('¿Esta seguro de eliminar este registro?')) return;
            
            /* Obtiene el objeto actual de la fila seleccionada */
            var fila = agrid.obtener($(this).val());
            
            /* Petición ajax al servidor */
            $.post('?c=Alumno&a=Eliminar', {
                id: fila.id
            }, function(r){
                if(r) agrid.refrescar();
            }, 'json')
            
            return false;
        })
    })
</script>


</div>
</body>

</html>