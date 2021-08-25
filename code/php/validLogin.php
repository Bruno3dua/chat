<?php
    include_once('conn.php');

    class validateLog{
        function validar(){
            $name = $_POST['nam_u'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if(!empty($name) && !empty($email) && !empty($pass)){
                echo('cadastrado com sucesso');
            }else{
                echo('preencha as inputs');
            }
        }
    }

    $valid = new validateLog();
    $valid->validar();

?>