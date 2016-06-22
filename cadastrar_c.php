<h1 class="page-header">Cadastrar Clientes</h1>
<fieldset>	
	<form class="form-horizontal" role="form" action="?page=salvar&acao=cadastrar&cat=c" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email" >Email:</label>
			<div class="col-sm-10"> 
				<input type="email" class="form-control" id="email" name="email" placeholder="Insira o email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="telefone">Telefone:</label>
			<div class="col-sm-10">
				<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Insira o telefone">
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
</fieldset>
