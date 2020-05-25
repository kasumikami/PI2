<?php 
include "main.php";
?>
<header><title>Login - Biblioteca</title></header>
<div class='container'>
    <div class='row'>
        <div class='col-md-2 col-md-offset-5'>
            <br><h1 class="title">Login</h1>
			<form action="bib-verif.php" method="POST">
            <input type="hidden" name="nivelBIB" value="2">
				<div class="form-group">
                <label class=>Login:</label>
				<input type="text" name="loginBIB" id="loginBIB" class="form-control" style="width: 200px">
                <label class="2">Senha:</label>
                <input type="password" name="senhaBIB" id="senhaBIB" class="form-control" style="width: 200px">
                <br><button type="submit" class="btn btn-primary btn-lg">Entrar</button>
            </form>
        </div>
    </div>
</div>