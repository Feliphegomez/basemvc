<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="icon" type="text/css" href="media/logo.jpg">

		<title>FerreMax</title>
  </head>
  <body>
	<header>
		<?php include "includes/navbar.php"; ?>
	</header>
	<!--// INICIO PAGINA -->
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<form action="<?php echo $helper->url("empleados","crear"); ?>" method="post" class="col-lg-12">
					<h3>Añadir empleado</h3>
					<hr/>
					ID: <input type="text" name="id_empleado" class="form-control" required=""/>
					Nombre: <input type="text" name="nombre" class="form-control" required=""/>
					Apellido: <input type="text" name="apellido" class="form-control" required=""/>
					Direccion: <input type="text" name="direccion" class="form-control" required=""/>
					Telefono: <input type="text" name="telefono" class="form-control" required=""/>
					Celular: <input type="text" name="celular" class="form-control" required=""/>
					Correo Electronico: <input type="email" name="correo_electronico" class="form-control" required=""/>
					<input type="submit" value="enviar" class="btn btn-success"/>
				</form>
			</div>
			<div class="col-sm-7">
				<h3>Empleados</h3>
				<hr/>
				<section class="col-lg-12 usuario" style="height:400px;overflow-y:scroll;">
					<?php foreach($all_empleados as $user) {?>
						<?php echo $user->id; ?> -
						<?php echo $user->id_empleado; ?> -
						<?php echo $user->nombre; ?> -
						<?php echo $user->apellido; ?> -
						<?php echo $user->direccion; ?> -
						<?php echo $user->telefono; ?> -
						<?php echo $user->celular; ?> -
						<?php echo $user->correo_electronico; ?>
						<div class="right">
							<a href="<?php echo $helper->url("empleados","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
						</div>
						<hr/>
					<?php } ?>
				</section>
			</div>
		
			
			<footer class="col-lg-12">
				<hr/>
				Este es mi footer. <?php echo $Hola; ?> - Copyright &copy; <?php echo  date("Y"); ?>
			</footer>
		</div>
	</div>
	<!--// FIN PAGINA -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>