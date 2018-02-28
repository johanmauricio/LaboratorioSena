<html>
<head>
	<meta charset="utf-8">
	<title>Pago</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>SALARIO</h2>

	<form action="" method="post">
	    Nombre del vendedor</br>
		<input type="text" name="nombreVendedor"/></br>
	    Cantidad automoviles vendidos</br>
		<input type="text" name="cantidad"/></br>
	    Precio total automoviles vendidos</br>
		<input type="text" name="totalVenta"/></br></br>
		<button class="submit" name="salario" type="submit">Enviar</button></br>
	</form>

	<br><br>

		<?php  
			$resultado;
	        if(isset($_POST["salario"])){
	            $nombreVendedor     = $_POST["nombreVendedor"];
	            $cantidad   = $_POST["cantidad"];
	            $totalVenta = $_POST["totalVenta"];

	            $comision = (50000*$cantidad);
	            $extraVentas = ($totalVenta*0.05);

				$valorFinalPagar = (450000+$comision+$extraVentas);
				$resultado = "El salario final del vendedor $nombreVendedor es $valorFinalPagar$";
	        }
	    ?>

	<h1><?php echo $resultado; ?></h1> 
</body>
</html>