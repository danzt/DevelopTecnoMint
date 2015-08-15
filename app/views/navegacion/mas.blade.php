<!DOCTYPE html>
<html>
<head>
<meta charset="iso-8859-1">
  <meta name="description" content="Ejemplo de HTML5">
  <meta name="keywords" content="HTML5, CSS3, JavaScript">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <title>Mas</title>
</head>
<body>
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
            <li><a href="pagar_credito">Targeta de Credito</a></li>
            <li><a href="pagar_transferencia">Transferencia</a></li>
            <li><a href="pagar_debito">Targeta de Debito</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</div> 

<p>Prueba de mas</p>


<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>