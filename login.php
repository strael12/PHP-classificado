<?php
session_start();
require_once './class/Connection.php';


if(isset($_POST['email']) && isset($_POST['senha']))
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(Login::validateUserLogin($email,$senha))
    {
        header("Location: index.php");
    }else {
        print 'Email e/ou senha inválido.';
    }
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="nav-logo">LOGO</div>
            <div class="nav-link">
                <ul class="nav-link1">
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <form action="" class="form" method="POST">
            <div class="form-in">
                <label for="">E-mail</label>
                <input type="email" name="email"/>
            </div>
            <div>
                <a class="forgot-password" href="">Esqueceu a senha?</a>
            </div>
            <div class="form-in">
                <label for="">Senha</label>
                <input type="password" name="senha"/>
            </div>          
            <div class="button-action">
                <button class="btn-enter">Entrar</button>
            </div>
        </form>
    </main>
</body>
</html>