<?php
     $login = $_POST['loginBIB'];
     $senha = $_POST['senhaBIB'];
   
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('BASE','bd_aco');
     $connect = new mysqli (HOST, USER, PASS, BASE);
    
     
     $res = mysqli_query($connect, "SELECT * FROM biblioteca WHERE nivel AND loginBIB = 
     '$login' AND senhaBIB = '$senha'");

     if(mysqli_num_rows ($res) > 0){
          session_start();

          $_SESSION['loginBIB'] = $login;
          $_SESSION['senhaBIB'] = $senha;
          //$_SESSION['nivel'] = ;
     
          if ($_SESSION['nivel'] == 2){
          header("Location:bib-dashboard.php");
          }
     }else{
          unset ($_SESSION['loginBIB']);
          unset ($_SESSION['senhaBIB']);
          header('location:bib-login.php');
     }

   
   
   
   /*if (isset($entrar)) {  
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
   } */
?>