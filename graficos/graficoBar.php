<?php 
include('../includes/config.php');

$arrayBar = [];

$sqlI = "SELECT id,data_chegada,especie,status_carregamento,SUM(quantidade) AS produzidoDia
FROM processos WHERE data_fim 
BETWEEN '2022-05-01' AND '2022-05-31' 
AND status_carregamento = 'Carregado'
GROUP BY data_fim";

$executeI = $conection->query($sqlI) or die (mysqli_error($conection));

while($results = mysqli_fetch_object($executeI)){
    array_push($arrayBar,$results);
    
};


echo json_encode($arrayBar);




?>