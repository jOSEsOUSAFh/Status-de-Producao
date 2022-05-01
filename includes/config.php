<?php



$host="localhost";
$user="root";
$password="";
$dbname="status_carregamento";


$conection = mysqli_connect($host,$user,$password,$dbname);

mysqli_set_charset($conection, "utf-8");

// SELECT * FROM processos WHERE  status_carregamento <> 'Carregado'  ORDER BY idOrdem ASC

$sql = "SELECT * FROM processos ORDER BY idOrdem ASC";

$execute = $conection->query($sql) or die (mysqli_error($conection));
            

?>