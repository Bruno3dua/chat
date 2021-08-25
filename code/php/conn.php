<?php

    // $conn = mysqli_connect("localhost", "root", "", "login_chat"); // conexão msqli
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO('mysql:host=localhost; dbname=login_chat', $user, $pass);
    }catch(PDOException $e){
        echo('ERRO: '. $e->getMessage());
    }            
    

?>