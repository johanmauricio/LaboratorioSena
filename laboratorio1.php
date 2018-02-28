<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 1 Nota final</title>
	<link rel="stylesheet" href="">
</head>
<body style="background: #ccc">

    <h1>notas final de la materia</h1>

    <form action="" method="POST">
        Parcial 1:    <input type="text" name="parcial1" value=""><br>
        Parcial 2:    <input type="text" name="parcial2" value=""><br>
        Parcial 3:    <input type="text" name="parcial3" value=""><br>
        Examen final: <input type="text" name="examenFinal" value=""><br>
        Trabajo final:<input type="text" name="trabajoFinal" value=""><br>
        <input type="submit" name="notaFinal" value="Nota Final">
    </form>

    <h1>
        <?php  
            if(isset($_POST["notaFinal"])){
                $parcial1 = $_POST["parcial1"];
                $parcial2 = $_POST["parcial2"];
                $parcial3 = $_POST["parcial3"];
                $examenFinal = $_POST["examenFinal"];
                $trabajoFinal = $_POST["trabajoFinal"];

                $PorParciales = ((($parcial1+$parcial2+$parcial3)/3)*0.35);
                $PorExamen = ($examenFinal*0.35);
                $PorTrabajo = ($trabajoFinal*0.30);
                echo "La nota final es " .($PorParciales+$PorExamen+$PorTrabajo);
            }
        ?>
    </h1>
</body>
</html>

