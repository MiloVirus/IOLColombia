<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IOL Colombia</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- Mi Fuente Google -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
	<!-- MI CSS -->
	<link rel="stylesheet" type="text/css" href="estiloIOL.css">

</head>
<body>

	<div class="container-fluid formulario">	
		<div class="container todo">
			<div class="container" align="center">
				<br>
			<img class="img-responsive" src="imagenes/logoF.png" alt="" >
			</div>
			<form id="daform" action="enviopreinscripcion.php" method="POST">
<h1>Pre-inscríbeteYA</h1>
<h4>La preinscripción tiene un costo de 30.000 pesos los cuales serán descontados del valor total del curso.</h4>
<h3>Opciones de pago </h3>
<h4>
	<ul>
     <li style="text-align: left">1 - Pago mediante consignación bancaria en la cuenta corriente Nº 609019401 del Banco de Bogotá a nombre de IOL Colombia SAS. <br>(Una vez realizada la consignación enviar copia al correo electrónico asistente@iolcolombia.com, adjuntando tu nombre completo y curso al cual optas)</li>
     <li style="text-align: left">2 - Pago mediante tarjeta de crédito o débito en las oficinas de IOL Colombia, Cra 66 # 11A-35 Oficina 202.</li>
	</ul>
</h3>
			 		<div class="cajas"><input name="nombre" class="estilo" type="text" placeholder="Ingrese su nombre" size="37" required></div>
			 		<br>
					 <div class="cajas"><input name="apellido" class="estilo" type="text" placeholder="Apellido" size="37" required></div>
					 <br>
			 		<div class="cajas"><input name="email" class="estilo" type="text" placeholder="Correo Electronico" size="37" required ></div>
			 		<br>
			 		<div class="cajas"><input name="ciudad" class="estilo" type="text" placeholder="Ciudad" size="37" required ></div>
			 		<br>
					<div class="cajas"><input name="celular" class="estilo" type="text" placeholder="Celular" size="37" required></div>
					<div><label for="fecha"> Seleccion Curso </label>
						<br>
					<select class="estilo" name="id_curso_pre">
						
						<option value="1">Periodismo Deportivo</option>

						<option value="2">Community Manager Nocturno</option>

						<option value="3">Marketing Deportivo</option>

						<option value="4">Manager Musical</option>

						<option value="5">Presentador de Entretenimiento</option>

						<option value="6">Community Manager Diurno</option>

						<option value="7">Gestión de Redes Sociales</option>

						<option value="8">Gestión y Marketing Odontológico</option>
					</select>
					<br>
					<br>
				<div><input name="genero" type="checkbox" value="hombre">Hombre
					<input name="genero" type="checkbox" value="mujer"> Mujer</div>	
					<br>
					<ul>
						<li><input type="image" onclick="submitForm('enviopreinscripcion.php')" name="input2" src="imagenes/correo.png" value="Submit2" width="48" height="48"></li>
						<li>Enviar</li>
					</ul>
				</form>
			</div><!-- CIERRE TODO -->
		</div><!-- CIERRE CONTENEDOR FLUID -->
       <script type="text/javascript">
    function submitForm(action)
    {
        document.getElementById('daform').action = action;
        document.getElementById('daform').submit();
        alert("Enviado");
        location.reload();
    }
</script>

...

		<div class="container">
						<a href="#"><img src="imagenes/seguro.png"></a>
						<h3>Tus datos están seguros</h3>
			</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>		
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="mijs.js"></script>
<script src="miotrojs.js"></script>

	</body>


	</html>