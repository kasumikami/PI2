<header><title>Login - Administrador</title></header>
<?php include "side-menu.php" ?>

<div class='container'>
    <div class='row'>
        <div class='col-md-2 col-md-offset-5'>
            <br><h1>Login</h1>
			<form action="verif-login.php" method="POST">
				<input type="hidden" name="tipo_usuario" value="1">
				<div class="form-group">
                <label>ID:</label>
				<input type="number" name="idLOGIN" id="idLOGIN" class="form-control" style="width: 200px">
                <label>Senha:</label>
                <input type="password" name="senhaADM" id="senhaADM" class="form-control" style="width: 200px">
                <br><button type="submit" class="btn btn-primary btn-lg" value="logar" id="logar" name="logar">Entrar</button>
            </form>
        </div>
    </div>
</div>