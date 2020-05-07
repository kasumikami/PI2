<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ACO - Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
</head>

<?php include "side-menu.php" ?>
<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
			<br><h1>Cadastro de Biblioteca</h1>
			<form action="#" method="POST">
				<br><input type="hidden" name="tipo_usuario" value="2">
				<div class="form-group">
                <label>Nome da Biblioteca:</label>
				<input type="text" name="nomeBIB" class="form-control">
                <label>E-mail:</label>
				<input type="email" name="emailBIB" class="form-control">
                <label>Telefone:</label>
				<input type="number" name="telefoneBIB" class="form-control">
                <label>Endereço:</label>
				<input type="text" name="enderecoBIB" class="form-control">
                <label>Horário de funcionamento:</label>
				<input type="text" name="horarioFuncionamento" class="form-control">
                <br><label>Rede Social:</label>
				<select class="form-control" name="rede_social">
                    <option value="facebook">Facebook</option>
                    <option value="twitter">Twitter</option>
                    <option value="insta">Instagram</option>
                </select>
                <br><label>Isira o link da rede social:</label>
                <input type="text" name="link" class="form-control">
                </div>
                
                <label>Agora, cadastre uma senha:</label>
				<input type="text" minlenght="6" name="horarioFuncionamento" class="form-control">



<script src="../js/jquery-3.4.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/util.js"></script>