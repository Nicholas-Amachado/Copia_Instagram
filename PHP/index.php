<?php
include_once 'function.php';
$u = new usuario;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  </head>
  <body>
    <main>
      <div class="main-container">
        <div class="banner-container">
          <img src="../img/banner2.png" alt="Crie sua conta no Insta" />
        </div>
        <div class="form-container">
          <div class="form-box">
            <img id="logo-insta" src="../img/logo_instagram.png" alt="Instagram" />
            <form id="login-form" action="#" method="post">

              <input
                type="text"
                name="username"
                placeholder="Número de telefone, usuário ou e-mail"
              />

              <input type="password"
              name="password" 
              placeholder="Senha" />
              <div id="password";>

              <?php
              if(isset($_POST['username'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                if(empty($password) && empty($username)){
                  echo("Senha ou Usuario em Branco");
                }
                else{
                $u ->conecta();
                $u ->logar($username,$password);
              }}
              

              ?>
              </div>
              <input type="submit" value="Entrar" name="logon" />
            </form>
            <div class="separator">
              <div class="line"></div>
              <span>Ou</span>
            </div>
            <div class="other-links">
              <div class="facebook-login">
                <a href="#">
                  <img src="../img/logo_facebook.svg" alt="Facebook" />
                  <span>Entrar com o Facebook</span>
                </a>
              </div>
              <div class="forgot-pass">
                <a href="#">Esqueceu a Senha?</a>
              </div>
            </div>
          </div>
          <div class="register-container">
            <p>Não tem uma conta? <a href="#">Cadastre-se</a></p>
          </div>
          <div class="get-app-container">
            <p>Obtenha o aplicativo</p>
            <a href="">
              <img src="../img/apple_btn.png" alt="Apple store" />
            </a>
            <a href="#">
              <img src="../img/gplay_btn.png" alt="Google play" />
            </a>
          </div>
        </div>
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
