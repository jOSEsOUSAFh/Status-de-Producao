<?php



$host="localhost";
$user="root";
$password="";
$dbname="status_carregamento";


$conection = mysqli_connect($host,$user,$password,$dbname);

mysqli_set_charset($conection, "utf-8");

$sqlCarregados = "SELECT *, TIMEDIFF(hora_fim,hora_inicio) AS tempo_carregamento FROM processos WHERE  status_carregamento = 'Carregado'  ORDER BY data_chegada DESC";
$executeCarregados = $conection->query($sqlCarregados) or die (mysqli_error($conection)); // relatorio carregados


$sql = "SELECT *, TIMEDIFF(hora_fim,hora_inicio) AS tempo_carregamento FROM processos WHERE  status_carregamento <> 'Carregado'  ORDER BY idOrdem ASC";
$execute = $conection->query($sql) or die (mysqli_error($conection)); // relatorio não carregados


            

?>