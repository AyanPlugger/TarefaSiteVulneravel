<?php
    require("../banco/conecta.php");
    session_start();
    $senha = strval( $_POST['senha'] ) ;
    $senha1 = MD5($senha);
    $login = $_POST['usuario'];


    
    $query = "SELECT * FROM tb_admin WHERE nm_admin ='$login' AND ds_senha = '$senha1'";
    $result = mysqli_query($conexao, $query);
    echo $query;
    if(mysqli_num_rows($result)==1){
        $_SESSION['acesso'] = "admin";
        header('location:../inicio.php');
    }else{
         header('location:../index.php');
    }
    