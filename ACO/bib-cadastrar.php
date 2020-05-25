<head><title>Cadastrar-se - Biblioteca</title></head>
<body>

<?php include "main.php" ?>
<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
        <form action="bib-salvar.php" method="POST" data-toggle="validator">
            <br><h1>Cadastro de Biblioteca</h1><br>
            <div class="form-group">
                <label>Nome da Biblioteca:</label>
				<input type="text" name="nomeBIB" class="form-control" value=""required>
                <label>E-mail:</label>
				<input type="email" name="emailBIB" class="form-control" value=""required>
                <label>Telefone:</label>
				<input type="number" name="telefone" class="form-control" value=""required>
                <label>Endereço:</label>
				<input type="text" name="endereco" class="form-control" value=""required>
                <label>Horário de funcionamento:</label>
                <input type="text" name="horarioFuncionamento" class="form-control" value=""required>
            </div>
            <div class="form-group">
                <br><span class="help-block">Agora, cadastre seus dados de login.</span>
                <label>ID:</label>
                <input type="text" name="loginBIB" class="form-control" style="width: 190px" data-minlength="6" data-maxlength="6" required autofocus>
                <span class="help-block">Seu ID deve ter seis (6) dígitos</span>
            </div>
            <div class="form-group">
               <label>Senha:</label>
                <input type="password" name="senhaBIB" class="form-control" style="width: 190px" data-minlength="6" data-maxlength="6" required>
                <span class="help-block">Sua senha deve ter seis (6) dígitos</span>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg" value="cadastro-bib" name="cadastro-bib" id="cadastro-bib" >Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>




