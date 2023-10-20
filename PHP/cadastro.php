<?php
include_once "function.php";
$u = new usuario();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/cadastro.css">
</head>

<body>
    <main>
        <div class="container-main">
            <section class="container-register">
                <img src="../img/logo_instagram.png" alt="Instagram" class="logo">
                <div class="register-p">
                    <p>
                        Cadastre-se para ver fotos e vídeos dos seus amigos
                    </p>
                </div>
                <div class="register-facebook">
                    <button class="button-facebook"><img src="../img/logo_facebook.svg" alt=""> Entrar com o Facebook</button>
                </div>
                <div id="separator">
                    <div class="line"></div>
                    <span>ou</span>
                </div>
                <form method="post" action="#" class="register">
                    <input type="text" name="num_email" placeholder="Número do celular ou email">
                    <input type="text" name="nome" placeholder="Nome Completo">
                    <input type="text" name="nome_user" placeholder="Nome de usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <div class="verificacao">
                    <?php

                    if (isset($_POST['num_email'])) {
                        $num_email = $_POST["num_email"];
                        $nome = $_POST["nome"];
                        $nome_user = $_POST["nome_user"];
                        $password = md5($_POST["senha"]);
                    
                        if(empty($num_email) || empty($nome) || empty($nome_user) || empty($password) ) {
                            echo "<p>Campo em Branco</p>";
                        }
                        else {
                            $u -> conecta();
                            if($u -> cadastrar($num_email,$nome,$nome_user,$password)== false){
                                echo"<p>Usuario já cadastrado</p>";
                            }

                        }
                    }
                    ?>
                    </div>
                    <div class="register-info">
                        <p>As pessoas que usam nosso serviço podem ter enviado suas informações de contato para o Instagram. <span class="link-info">Saiba mais </span></p>
                        <p>
                        Ao se cadastrar, você concorda com nossos <span class="link-info">Termos, Política de Privacidade </span class="link-info"> e <span> Política de Cookies</span>.
                        </p>
                    </div>
                    <input type="submit" value="Cadastre-se" id="register-button">
                </form>
            </section>

            <section class="login">
                <p>Tem uma conta?<a href="index.php">Conecte-se</a></p>
            </section>

            <section class="get-app-container">
            <p>Obtenha o aplicativo</p>
            <a href="">
              <img src="../img/apple_btn.png" alt="Apple store" />
            </a>
            <a href="#">
              <img src="../img/gplay_btn.png" alt="Google play" />
            </a>
            </section>
        </div>
    </main>
    <footer>
      <nav>
        <ul id="footer-links">
          <li><a href="">Meta</a></li>
          <li><a href="">Sobre</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Ajuda</a></li>
          <li><a href="">API</a></li>
          <li><a href="">Termos</a></li>
          <li><a href="">Privacidade</a></li>
          <li><a href="">Instagram Lite</a></li>
          <li><a href="">Instagram Lite</a></li>
          <li><a href="">Instagram Lite</a></li>
        </ul>
      </nav>
      <p id="copyright">&copy;2023 Instagram from Meta</p>
    </footer>
</body>

</html>
