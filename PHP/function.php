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

    function logar($usario,$password){
        global $pdo;
        $sql = $pdo -> prepare("select id from cadastro where num_email = :u");
        $sql -> BindValue(':u',$usario);
        $sql -> execute();
        if ($sql->rowCount()>0){
            header('location:home.php');
        }
        else{
            echo("Usuario não existente");
        }


    }
}
?>