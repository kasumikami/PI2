<head><title>Cadastrar-se - Biblioteca</title></head>
<body>
<?php include "side-menu.php" ?>
<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
        <form action="bib-salvar.php" method="POST" data-toggle="validator">
        <input type="hidden" name="acao" value="cadastro-bib">
            <br><h1>Cadastro de Biblioteca</h1>
            <span class="help-block">Cadastre seu login.</span>
				
            <div class="form-group">
                <label>ID:</label>
                <input type="text" name="loginBIB" class="form-control" style="width: 190px" required autofocus>
                <span class="help-block">Seu ID deve ter seis (6) dígitos</span>
            </div>
            <div class="form-group">
               <label>Senha:</label>
                <input type="password" name="senhaBIBLIOTECA" class="form-control" style="width: 190px" data-minlength="6" data-maxlength="6" required>
                <span class="help-block">Sua senha deve ter seis (6) dígitos</span><br><br>
            </div>
            
            <span class="help-block">Agora cadastre seus dados.</span>
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
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg" value="cadastro-bib" >Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>




