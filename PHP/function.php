<?php
class usuario{
    private $pdo;

    function conecta(){
        global $pdo;
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "instagram";
        $pdo = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    }

    function logar($usuario,$password){
        global $pdo;
        $sql = $pdo -> prepare("select id from cadastro where num_email = :u");
        $sql -> BindValue(':u',$usuario);
        $sql -> execute();
        if ($sql->rowCount()>0){
            header('location:home.php');
        }
        else{
            echo("Usuario não existente");
        }


    }

    function cadastrar($numero, $nome_completo, $usuario, $senha){
        global $pdo;
        $sql = $pdo -> prepare("select * from cadastro where num_email = :ne");
        $sql -> bindValue(":ne", $numero);
        $sql -> execute();
        if ($sql->rowCount()> 0){
            //print_r($sql->fetchAll(PDO::FETCH_ASSOC));
            return false;
        }
        else{
            $sql = $pdo -> prepare("INSERT INTO cadastro(num_email, nome_completo, nome_usuario, senha) VALUES (:n,:c,:u,:p)");
            $sql -> bindValue(":n", $numero);
            $sql -> bindValue(":c", $nome_completo);
            $sql -> bindValue(":u", $usuario);
            $sql -> bindValue(":p", $senha);
            $sql -> execute();
            return true;
        }
    }
}
?>
