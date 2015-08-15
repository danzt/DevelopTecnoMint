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

<div class="jumbotron">
  <h1>Verifica tus datos!</h1>
  <p>Tu nombre: {{$nombre}}</p>
	<p>Tu apellido: {{$apellido}}</p>
	<p>Tu email: {{$correo}}</p>
	<p>Tu telefono: {{$telefono}}</p>
</div>

<div class="alert alert-success" role="alert">
	<p>Tu informacion Fue Guardada!</p>
</div>

<div class="alert alert-success" role="alert">
<p>Registro Satisfactorio</p>
</div>

<button type="submit" class="btn btn-succes"> Aceptar </button>
</body>
</html>