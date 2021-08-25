<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-login.css">
    <title>Login</title>
</head>
<body>
    <div class="cont">
        <div class="cont-header">
            <div class="text">
                Register
            </div>
            <div class="btn_login">
                <img src="../src/iconpack/btn_loginpng.png" alt="" height="33px" width="33px">
            </div>
        </div>
        <form class="register-box" id="reg-box" action="#">
            <div class="cont-inputs username">
                <input type="text" name="name_reg" id="username" autocomplete="no" required>
                <p>Username</p>
            </div>
            <div class="cont-inputs">
                <input type="text" name="email_reg" id="email-input" autocomplete="no" required> 
                <p>Email</p>
            </div>
            <div class="cont-inputs">
                <input type="password" name="pass_reg" id="pass-input" autocomplete="no" required>
                <p>Password</p>
            </div>
            <div>
                <input id="btn-register" type="submit" value="Registrar">
            </div>
        </form>
        <div class="cont-gp">
            <div class="cont-photo">
                <input type="file" id="" class="">
            </div>
            <div class="cont-btn_register">
    
            </div>
        </div>
    </div>

    <script src="../js/reqAjaxReg.js"></script>

</body>
</html>