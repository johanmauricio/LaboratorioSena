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