<?php 
include('../includes/config.php');


$arrayTabela = [];

$sql3 = "SELECT 
SUM(CASE WHEN status_carregamento = 'Carregado' THEN quantidade END) 
AS totalCarregado,  
SUM(CASE WHEN status_carregamento <> 'Carregado' THEN quantidade END) 
AS metaProgramadaNaoExecutada,
SUM(CASE WHEN status_carregamento = 'Carregado' AND especie = 'BigBag' THEN quantidade END) 
AS carregadoEmBigbag,
SUM(CASE WHEN status_carregamento = 'Carregado' AND especie = 'Granel' THEN quantidade END) 
AS carregadoEmGranel,
COUNT(CASE WHEN status_carregamento = 'Carregado' THEN id END) 
AS totalVeiculosCarregados
FROM processos WHERE data_chegada BETWEEN '2022-06-01' AND '2022-06-31';";

$execute3 = $conection->query($sql3) or die (mysqli_error($conection));

while($results3 = mysqli_fetch_object($execute3)){
    array_push($arrayTabela,$results3);
};

echo json_encode($arrayTabela);

?>
