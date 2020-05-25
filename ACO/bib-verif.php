
<?php
     session_start();
     
     $login = $_POST['loginBIB'];
     $senha = SHA1($_POST['senhaBIB']);
     $nivel = $_POST['nivelBIB'];
   
     define('HOST','localhost');
     define('USER','root');
     define('PASS','');
     define('BASE','aco');
     $connect = new mysqli (HOST, USER, PASS, BASE);
     $res = mysqli_query($connect, "SELECT * FROM biblioteca WHERE loginBIB = '$login' AND senhaBIB = '$senha'");

     

     if(mysqli_num_rows ($res) == 1){
          $_SESSION['loginBIB'] = $login;
          $_SESSION['senhaBIB'] = $senha;
          $_SESSION['nivelBIB'] = $nivel;

          $get_id = mysqli_query($connect, "SELECT idBIB FROM biblioteca WHERE loginBIB = '$login'");
          $row = mysqli_fetch_assoc($get_id);
          $id = $row['idBIB'];
          $_SESSION['usuario'] = $id;
     
          if ($_SESSION['nivelBIB'] == 2){
          header("Location:bib-dash.php");
          }
     }else{
          unset ($_SESSION['loginBIB']);
          unset ($_SESSION['senhaBIB']);
          header('location:bib-login.php');
     }
?>
