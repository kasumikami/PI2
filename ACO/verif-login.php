<?php
   $login = $_POST['idLOGIN'];
   $senha = $_POST['senhaADM'];
   $entrar = $_POST['logar'];
   
   define('HOST','localhost');
   define('USER','root');
   define('PASS','');
   define('BASE','acoBD');
   $connect = new mysqli (HOST, USER, PASS, BASE);
    
   if (isset($entrar)) {  
       $verifica = mysqli_query($connect, "SELECT * FROM administrador WHERE idADM = '1' AND idLOGIN = 
       '$login' AND senhaADM = '$senha'") or die("Erro ao selecionar.");
        if (mysqli_num_rows($verifica)<=0){
           echo"<script language='javascript' type='text/javascript'>
           alert('Login e/ou senha incorretos.');window.location
           .href='login.php';</script>";
           die();
        }else{
           setcookie("login",$login);
           header("Location:home.php");
        }
    } 
?>