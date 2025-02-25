<?php
require_once 'crud.php';
$u = new usuarios;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <form method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" maxlength="100" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" placeholder="Senha" maxlength="32" >
                <i class='bx bxs-lock-open-alt'></i>
            </div>

            <div class="esqueci-senha">
                <label for="checkbox"><input id="checkbox" type="checkbox">Lembrar</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <button class="btn" type="submit">Login</button>

            <div class="cadastro-link">
                <p>Não possui uma conta?
                <a href="cadastrar.php">Cadastrar-se</a>
                </p>
            </div>
        </form>

    <?php
    
    if(isset($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);


        //verificar se esta vazio

        if(!empty($email) && !empty($senha)) {
            $u->conectar("cadastro","localhost","root","");
            if ($u->msgErro == ""){
            if( $u->logar($email, $senha)){

                    header("location: ../View/index.php");

           } else{
            ?>
            <div class="msg-erro">
                Email e/ou senha incorretos! 
            </div>
            <?php
           }
        
        } else{
            echo "Erro:". $u->msgErro;
        }

        } else{
            ?>
                <div class="msg-erro">
                    Preencha todos os campos! 
                </div>
                <?php
        }
    }
    ?>

    </div>
</body>
</html>