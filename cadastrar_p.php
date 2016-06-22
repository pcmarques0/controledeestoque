<h1 class="page-header">Cadastrar Produtos</h1>
<fieldset>	
	<form class="form-horizontal" role="form" action="?page=salvar&acao=cadastrar&cat=p" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="preco">Preço:</label>
			<div class="col-sm-10"> 
				<input type="preco" class="form-control" id="preco" name="preco" placeholder="0,00">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descricao">Descrição:</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira a descrição do produto" maxlength="300"></textarea>
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>
	</form>
</fieldset>
