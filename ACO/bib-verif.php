<?php
   $login = $_POST['loginBIB'];
   $senha = md5($_POST['senhaBIB']);
   $entrar = $_POST['logar'];
   
   define('HOST','localhost');
   define('USER','root');
   define('PASS','');
   define('BASE','acoBD');
   $connect = new mysqli (HOST, USER, PASS, BASE);
    
   if (isset($entrar)) {  
       $verifica = mysqli_query($connect, "SELECT * FROM biblioteca WHERE loginBIB = 
       '$login' AND senhaBIBLIOTECA = '$senha'") or die("Erro ao selecionar.");
      if (mysqli_num_rows($verifica)<=0){
           echo"<script language='javascript' type='text/javascript'>
           alert('Login e/ou senha incorretos.');window.location
           .href='bib-login.php';</script>";
           die();
      }else{
           setcookie("login",$login);
           header("Location:bib-dashboard.php");
      }
   } 
?>