<?php

session_start();

if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    
    $nome = $_SESSION["usuario"][0];
    $adm = $_SESSION["usuario"][1];

    }else{
        echo "<script>window.location = 'login/login.html'</script>";
    }

if($adm == 1){

    
    require('indexadm.php');


   }elseif($adm == 0){
       
       
     require('indexuser.php');


   }else{
       echo "<script>window.location = '../login.html'</script>";
   }


?>