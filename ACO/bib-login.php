<?php include "side-menu.php" ?>

<header><title>Login - Biblioteca</title></header>
<div class='container'>
    <div class='row'>
        <div class='col-md-2 col-md-offset-5'>
            <br><h1 class="title">Login</h1>
			<form action="bib-verif.php" method="POST">
				<input type="hidden" name="acao" value="logar">
				<div class="form-group">
                <label>ID:</label>
				<input type="text" name="loginBIB" id="loginBIB" class="form-control" style="width: 200px">
                <label>Senha:</label>
                <input type="password" name="senhaBIB" id="senhaBIB" class="form-control" style="width: 200px">
                <br><button type="submit" class="btn btn-primary btn-lg" value="logar" id="logar" name="logar">Entrar</button>
            </form>
        </div>
    </div>
</div>