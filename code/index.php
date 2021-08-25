<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style-login.css">
    <title>Login</title>
</head>
<body>
<img src="src/bg.jpg" alt="">
    <div class="cont">
        <div class="cont-header">
            <div class="text">
                Login
            </div>
            <!-- <div class="btn_login">
                <img src="src/iconpack/btn_loginpng.png" alt="" height="33px" width="33px">
            </div> -->
        </div>
        <form class="register-box" id="form_login" action="#">
            <div class="cont-inputs username">
                <input type="text" name="nam_u" id="username" autocomplete="no" required>
                <p>Username</p>
            </div>
            <div class="cont-inputs">
                <input type="text" name="email" id="email-input" autocomplete="no" required> 
                <p>Email</p>
            </div>
            <div class="cont-inputs">
                <input type="password" name="pass" id="pass-input" autocomplete="no" required>
                <p>Password</p>
            </div>
        </form>
        <div class="cont-gp">
            <div class="cont-photo">
                <!-- <div class="photoframe">

                </div>
                <div class="photoframe-status">
                    Sucesso
                </div> -->
            </div>
            <div class="cont-btn_register">
                <input id="btn-submit" type="submit" value="Entrar">

                <a href="app/register.php">Registrar</a>
            </div>
        </div>
    </div>

    <script src="js/reqAjax.js"></script>

</body>
</html>