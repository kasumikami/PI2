<?php 
 
$login = $_POST['loginBIB'];
$senha = $_POST['senhaBIB'];

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','bd_aco');
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
      
        $insert = mysqli_query($conn, "INSERT INTO biblioteca (nomeBIB, emailBIB, telefone, endereco, horarioFuncionamento, loginBIB, senhaBIB) 
        VALUES ('".$_REQUEST["nomeBIB"]."', '".$_REQUEST["emailBIB"]."','".$_REQUEST["telefone"]."', '".$_REQUEST["endereco"]."', '".$_REQUEST["horarioFuncionamento"]."', '$login', '$senha')");
      
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='#'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário.');window.location
          .href='#'</script>";
        }
      }
    }
?>