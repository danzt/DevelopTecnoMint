<!DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-1">
  <meta name="description" content="Ejemplo de HTML5">
  <meta name="keywords" content="HTML5, CSS3, JavaScript">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
<title>Inventario</title>
</head>
<body>
 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="barra">
	<div class="navbar navbar-inverse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home"> Home <span class="glyphicon glyphicon-home" aria-hidden="true"></span><span class="sr-only">(current)</span></a></li>
        <li><a href="/categoria"> Categoria <span class="glyphicon glyphicon-star" aria-hidden="true"></span></a></li>
        <li class="dropdown">
          <a href="/perfil" role="button"> Perfil <span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
           </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/mas">Mas <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pagos <span class="glyphicon glyphicon-usd" aria-hidden="true"> </span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/pagar_credito">Targeta de Credito</a></li>
            <li><a href="/pagar_transferencia">Transferencia</a></li>
            <li><a href="/pagar_debito">Targeta de Debito</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</div> 
<div id="adjuntar">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electonico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Validar Datos</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Seleccione un Archivo para Adjuntar</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Validar su Adjunto
    </label>
  </div>
  <input type="text" class="form-control" placeholder="Comentario">
  </br>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>


</div>
  <div class="pagos">
    <form class="form-inline">
      <div class="form-group">
        <label class="sr-only" for="exampleInputAmount"> Amount (in dollars)</label>
        <div class="input-group">
          <div class="input-group-addon">BsF</div>
          <input type="text" class="form-control" id="exampleInputAmount" placeholder="Monto">
          <div class="input-group-addon">.00</div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary"> Transferencia</button>
    </form>
  </div>
<div class="registro">
<div id="container_">
  <div id="titulo"><h1>Registro</h1></div>
	<div class="formularios">
		<form method="post" action="/formulario">
		<div class="field">
			<form class="form-horizontal">
			  <div class="form-group">
			   
			    <label for="inputnombre3" class="col-sm-2 control-label">nombre</label>
			    <div class="col-sm-10">
			      <input type="text" name = "nombre" class="form-control" id="inputnombre3" placeholder="nombre" value="" />
			    </div>
			  </div>
		</div>


		<div class="form-group">
		    <label for="inputapellido3" class="col-sm-2 control-label">apellido</label>
			    <div class="col-sm-10">
			      <input type="text" name = "apellido" class="form-control" id="inputapellido3" placeholder="apellido" value="" />
			    </div>
			   <br>
		</div>

		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">correo</label>
		    <div class="col-sm-10">
			      <input type="text" name = "correo" class="form-control" id="inputEmail3" placeholder="correo" value="" />
		    </div>
			<br>
		</div>
		
		<div class="form-group">
		    <label for="inputtelefono3" class="col-sm-2 control-label">telefono</label>
			    <div class="col-sm-10">
			      <input type="text" name = "telefono" class="form-control" id="inputtelefono" placeholder="telefono" value="" />
			    </div>	
			   <br>
	    </div>
		<br/>
	<button class="btn btn-lg btn-success" href="#">
  <i class="fa fa-paper-plane fa-lg pull-left"></i> Enviar <br></button>			
		</form>
	</div>
  </div>  
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>