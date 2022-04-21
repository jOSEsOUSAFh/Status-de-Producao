<?php
include('includes/config.php');
session_start();



if(isset($_POST['btnregistrar'])){

    // $dataBrasileira = $_POST['data_chegada'];
    

    //  $dataAmericana = date("Y-d-m", strtotime($dataBrasileira));

    $data_chegada = $_POST['data_chegada'];
    $placa = $_POST['placa'];
    $transportadora = $_POST['transportadora'];
    $ordem = $_POST['ordem'];
    $produto = $_POST['produto'];
    $especie = $_POST['especie'];
    $quantidade = $_POST['quantidade'];

    $query = "INSERT INTO processos (data_chegada, placa, transportadora, ordem, produto, especie, quantidade) VALUES(
    '".$data_chegada."','".$placa."','".$transportadora."','".$ordem."','".$produto."','".$especie."','
    ".$quantidade."   ') ";
    $query_run = mysqli_query($conection, $query);

    if($query_run){
        $_SESSION['success'] = "Processo adicionado";
        header('Location: indexZ.php');
    }else{
        $_SESSION['status'] = "Processo não foi adicionado";
        header('Location: indexZ.php');
};
}




if(isset($_POST['updatebtn'])){
    $id = $_POST['edit_id'];
    $data_chegada = $_POST['edit_data_chegada'];
    $placa = $_POST['edit_placa'];
    $transportadora = $_POST['edit_transportadora'];
    $ordem = $_POST['edit_ordem'];
    $produto = $_POST['edit_produto'];
    $especie = $_POST['edit_especie'];
    $quantidade = $_POST['edit_quantidade'];

    $query = "UPDATE processos SET  data_chegada='$data_chegada', placa='$placa',
     transportadora='$transportadora', ordem='$ordem', produto='$produto', especie='$especie', quantidade='$quantidade' WHERE id='$id' ";
    $query_run = mysqli_query($conection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Editado";
        header('Location: indexZ.php');

    }else{
        $_SESSION['status'] = "Editado";
        header('indexZ.php');
    }
};





if (isset($_POST['btndelete'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE  FROM processos WHERE id ='$id' ";
    $query_run = mysqli_query($conection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Processo deletado";
        header('Location: indexZ.php');
    }else{
        $_SESSION['status'] = "Processo não foi deletado";
        header('Location: indexZ.php');
    }
}









?>