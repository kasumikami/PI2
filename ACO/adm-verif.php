
<?php
     $login = $_POST['loginADM'];
     $senha = SHA1($_POST['senhaADM']);
     $nivel = $_POST['nivelADM'];
   
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('BASE','aco');
     $connect = new mysqli (HOST, USER, PASS, BASE);
    
     $res = mysqli_query($connect, "SELECT * FROM administrador WHERE loginADM = 
     '$login' AND senhaADM = '$senha'");

     if(mysqli_num_rows ($res) > 0){
          session_start();
          $id = $_POST['idADM'];
          $_SESSION['loginADM'] = $login;
          $_SESSION['senhaADM'] = $senha;
          $_SESSION['nivelADM'] = $nivel;
     
          if ($_SESSION['nivelADM'] == 1){
          header("Location:adm-dash.php");
          }
     }else{
          unset ($_SESSION['loginADM']);
          unset ($_SESSION['senhaADM']);
          header('location:adm-login.php');
     }
?>
