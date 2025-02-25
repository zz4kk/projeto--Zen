<?php
class usuarios {
    private $conn;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha){
        
        try {
            global $conn;
            $conn = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }
    } 
    
    public function cadastrar($nome, $email, $senha, $telefone){
    
        global $conn;
        // verificar se ja esta cadastrado
        $sql = $conn->prepare('SELECT id FROM usuario WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false; // ja esta cadastrada
        } else {
            // cadastrar
            $sql = $conn->prepare('INSERT INTO usuario (nome, email, senha, telefone) VALUES (:nome, :email, :senha, :telefone)');
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', md5($senha));
            $sql->bindValue(':telefone', $telefone);
            $sql->execute();
            return true; // foi cadastrado
        }
        

    }

    public function logar($email, $senha){

        global $conn;
        // verificar se o email e a senha estao cadastrados
        $sql = $conn->prepare('SELECT id FROM usuario WHERE email = :email AND senha = :senha');
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0){
            // entrar no sistema(SESSAO)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id'] = $dado['id'];
            return true; //logado com sucesso
        } else{
            return false; // nao foi possivel logar
        }

    }
}


?>