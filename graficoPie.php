<?php 
include('includes/config.php');

$arrayPie = [];

// SELECT id,especie,status_carregamento,SUM(quantidade) AS produzidoBigBag FROM processos WHERE status_carregamento = "Carregado" AND especie = "BigBag";

$sql2 = "SELECT id,especie,status_carregamento,SUM(quantidade)AS produzidoTotal FROM processos;";

$execute2 = $conection->query($sql2) or die (mysqli_error($conection));

while($results2 = mysqli_fetch_object($execute2)){
    array_push($arrayPie,$results2);
    
};

echo json_encode($arrayPie);

?>
