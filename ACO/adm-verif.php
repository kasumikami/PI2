<?php
     $login = $_POST['loginADM'];
     $senha = SHA1($_POST['senhaADM']);
     $nivel = $_REQUEST['tipo_usuario_idUSUARIO'];
   
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('BASE','bd_aco');
     $connect = new mysqli (HOST, USER, PASS, BASE);
    
     //$id = "SELECT idADM from administrador where loginADM = '$login' and senhaADM = '$senha'";
     $res = mysqli_query($connect, "SELECT * FROM administrador WHERE tipo_usuario_idUSUARIO = '1' AND loginADM = 
     '$login' AND senhaADM = '$senha'");

     if(mysqli_num_rows ($res) > 0){
          session_start();

          //$_SESSION['idADM'] = $id;
          $_SESSION['loginADM'] = $login;
          $_SESSION['senhaADM'] = $senha;
          $_SESSION['tipo_usuario_idUSUARIO'] = $nivel;
     
          if ($_SESSION['tipo_usuario_idUSUARIO'] == 1){
          header("Location:adm-dashboard.php");
          }
     }else{
          unset ($_SESSION['loginADM']);
          unset ($_SESSION['senhaADM']);
          header('location:adm-login.php');
     }


     
   /*if (isset($entrar)) {  
       $verifica = mysqli_query($connect, "SELECT * FROM administrador WHERE idADM = '1' AND loginADM = 
       '$login' AND senhaADM = '$senha'") or die("Erro ao selecionar.");
      if (mysqli_num_rows($verifica)<=0){
           echo"<script language='javascript' type='text/javascript'>
           alert('Login e/ou senha incorretos.');window.location
           .href='adm-login.php';</script>";
           die();
      }else{
           setcookie("login",$login);
           header("Location:adm-dashboard.php");
      }
   } */
?>
