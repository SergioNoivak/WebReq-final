
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebReq - Requirements Management System</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
        <script>
            function validar() {
                var username = formLogin.username.value;
                var password = formLogin.password.value;

                if (username == "") {
                    alert("username is void");
                    return false;
                }
                if (password == "") {
                    alert("password is void");
                    return false;

                }
            }

        </script>
    </head>

    <?php session_start(); ?>
    <body>
        <?php
        if (isset($_SESSION['nao_cadastrado'])) {
            echo "<script> alert('no registers'); </script>";
            $_SESSION['nao_cadastrado'] = NULL;
        }
        ?>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">WebReq</a>
                </div>
                <div class="collapse navbar-collapse" id="barra">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container margin-bottom-medium">
            <h1 class="text-center margin-bottom-medium">Login</h1>
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <form name="formLogin" action="controller/controle_login.php" method="post">                
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" id="username" type="text" placeholder="Username" name="username">
                    </div>  
                    <div class="form-group margin-bottom-medium">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" type="password" placeholder="Password" name="password">
                    </div>
                    <button class="btn btn-primary" type="submit" onclick="return validar()">Sign in</button>
                    <button class="btn btn-default pull-right" type="submit">Forgot password?</button>
                </form>
                <form name="formSignUp" action="view/SignUpView.php">
                    <div style="margin-top: 15px;"><button class="btn btn-success pull-right" type="submit">Sign Up</button></div>
                </form>
            </div>
        </div>
        <div class="container margin-bottom-medium">
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>