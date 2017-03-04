<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
     <a class="navbar-brand" href="./verLista.php"><b>SICOVIP</b></a>
  </div>
 <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="./verct.php">Cliente-Top</a></li>
    </ul>
     <ul class="nav navbar-nav">
      <li><a href="./verp.php">Propietario</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="./ver.php">Visado</a></li>
    </ul>
    <ul class="nav navbar-nav">
   <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Tramite<span class="caret"></span></a> 
   <ul class="dropdown-menu">
<li><a href="./Cliente.php">Nuevo Tramite</a></li>
<li><a href="./vertram.php">Tramites</a></li>
</ul>
</ul>
<ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Consulta<span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./verClient.php">Proceso de visado</a></li>
<li><a href="./verVisado.php">Visados</a></li>
<li><a href="./verLista.php">Planos entrantes</a></li>
</ul>
</ul>
<ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Reportes<span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./verReportVis.php">Fecha Visado</a></li>
<li><a href="./verReportfs.php">Fecha Solicitud</a></li>
<li><a href="./verReportCIT.php">Codigo IT</a></li>
</ul>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="glyphicon glyphicon-cog"></i><span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./config.php">Configuraciones</a></li>
<li> <a href="index.php" class="btn btn-defult"> Cerrar sesion</a></li>
</ul>
</ul> 
<form class="navbar-form navbar-left" role="search" action="./buscarp.php">
      <div class="form-group">
        <input type="text" name="s" class="form-control" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
    </form>
  </div><!-- /.navbar-collapse -->
</div>
</nav>