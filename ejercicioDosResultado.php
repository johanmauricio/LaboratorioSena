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

	echo $resultado;
}
?>
