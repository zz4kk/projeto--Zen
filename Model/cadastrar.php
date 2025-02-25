<?php
    require_once 'crud.php';
    $u = new usuarios;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.7.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="container">
            <h1>Cadastre-se</h1>
             <form method="POST">
            <div class="input-box">
                <input type="text" name="nome" maxlength="40" placeholder="Nome completo" value="" >
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" maxlength="100" placeholder="Email" required >
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="senha" maxlength="32" placeholder="Senha" >
                <i class='bx bxs-lock-open-alt'></i>
            </div>
            <div class="input-box">
                <input type="tel" name="telefone" maxlength="30" placeholder="Telefone" >
                <i class='bx bxs-phone'></i>
            </div>


            <button class="btn" name="cadastrado" type="submit">Cadastrar-se</button>
            </form>

    
    <?php
    //verificar se o botao foi clicado

    if(isset($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $telefone = addslashes($_POST['telefone']);


        //verificar se esta vazio

        if(!empty($nome) && !empty($email) && !empty($senha) && !empty($telefone)) {
            $u->conectar("cadastro","localhost","root","");
            if ($u->msgErro == ""){ //nao deu erro

               if( $u->cadastrar($nome, $email, $senha, $telefone)){
                ?>
                <div id="msg-sucesso">
                    Cadastrado com sucesso! <a href="login.php">Entrar</a>
                </div>
                <?php
               } else{
                ?>
                <div class="msg-erro">
                    Email já cadastrado! 
                </div>
                <?php
               }

            } else{
                ?>
                <div class="msg-erro">
               <?php echo "Erro: ".$u->msgErro; ?>
                </div>
                <?php
            }

        } else{
            ?>
                <div class="msg-erro">
                    Preencha todos os campos! 
                </div>
                <?php
        }
    }
    
    ?></div>
</body>
</html>