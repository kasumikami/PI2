<?php 
 
$login = $_POST['loginBIB'];
$senha = MD5($_POST['senhaBIBLIOTECA']);

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','acobd');
$conn = new mysqli(HOST,USER,PASS,BASE);

$select = "SELECT * FROM biblioteca WHERE loginBIB = '$login'";
$query1 = mysqli_query($conn, $select);
$array = mysqli_fetch_array($query1);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    bib-cad.php';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        bib-cad.php';</script>";
        die();
 
      }else{
      
        $insert = mysqli_query($conn, "INSERT INTO biblioteca (loginBIB, nomeBIB, emailBIB, telefoneBIB, enderecoBIB, horarioFuncionamento, senhaBIBLIOTECA) 
        VALUES ('$login', '".$_REQUEST["nomeBIB"]."', '".$_REQUEST["emailBIB"]."','".$_REQUEST["telefoneBIB"]."', '".$_REQUEST["enderecoBIB"]."', '".$_REQUEST["horarioFuncionamento"]."', '$senha')");
      
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='bib-login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário.');window.location
          .href='bib-cad.php'</script>";
        }
      }
    }
?>