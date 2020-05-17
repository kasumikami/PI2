<?php include "side-menu.php" ?>

<header><title>Login - Administrador</title></header>
<div class='container'>
    <div class='row'>
        <div class='col-md-2 col-md-offset-5'>
            <br><h1 class="title">Login</h1>
			<form action="adm-verif.php" method="POST">
				<input type="hidden" name="tipo_usuario_idUSUARIO" value="1">
				<div class="form-group">
                <label class="1">ID:</label>
				<input type="number" name="loginADM" id="loginADM" class="form-control" style="width: 200px">
                <label class="2">Senha:</label>
                <input type="password" name="senhaADM" id="senhaADM" class="form-control" style="width: 200px">
                <br><button type="submit" class="btn btn-primary btn-lg" value="logar" id="logar" name="logar">Entrar</button>
            </form>
        </div>
    </div>
</div>
