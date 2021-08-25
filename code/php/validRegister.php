<?php
    include_once('conn.php');

    class ValidReg{
        function validRegister($conect){

            $nameR = htmlspecialchars($_POST['name_reg']);
            $emailR = htmlspecialchars($_POST['email_reg']);
            $passR = htmlspecialchars($_POST['pass_reg']);
            // $date = now();

            if(!empty($nameR) && !empty($emailR) && !empty($passR)){
                $stmt = $conect->prepare("SELECT * FROM `data_users`");
                $stmt->execute();
                
                while($row = $stmt->fetch()){
                    if($nameR == $row[0] && $emailR == $row[1] && $passR == $row[2] ){
                        echo('email já cadastrado');
                    }else{
                        
                        $insert = "INSERT INTO data_users (email_user, name_user, pass_user) VALUES (:e, :n, :p)";

                        $into = $conect->prepare($insert);
                        $into->bindParam(":e", $emailR);
                        $into->bindParam(":n", $nameR);
                        $into->bindParam(":p", $passR);
                        $into->execute();

                        if($into->execute()){
                            echo('cadastrado com sucesso');
                        }
                    }
                }
            }
        }
    }

    $regist = new ValidReg();
    $regist->validRegister($conn);
?>


