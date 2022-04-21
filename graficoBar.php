<?php 
include('includes/config.php');

$arrayBar = [];

$sqlI = "SELECT id, data_chegada,SUM(quantidade) as produzidoDia FROM processos GROUP BY data_chegada;";

$executeI = $conection->query($sqlI) or die (mysqli_error($conection));

while($results = mysqli_fetch_object($executeI)){
    array_push($arrayBar,$results);
    
};


echo json_encode($arrayBar);




?>