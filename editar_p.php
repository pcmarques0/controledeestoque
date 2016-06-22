<?php 

	$sql = "SELECT * FROM produto WHERE id = ".$_REQUEST["id"];

	$res = mysql_query($sql,$con);
	
	if(mysql_num_rows($res) >= 1){
		$row = mysql_fetch_array($res);	
?>

<h1 class="page-header">Editar Produto #<?php print $row["id"]; ?></h1>
<fieldset>	
	<form class="form-horizontal" role="form" action="?page=salvar&acao=editar&cat=p" method="post">
		<input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>" /> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome" value="<?php print $row["nome"]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="preco">Preço:</label>
			<div class="col-sm-10"> 
				<input type="preco" class="form-control" id="preco" name="preco" placeholder="0,00"value="<?php print $row["preco"]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="descricao">Descrição:</label>
			<div class="col-sm-10">
				<textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Insira a descrição do produto" maxlength="300"><?php print $row["descricao"]; ?></textarea>
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Submit</button>
				<button type="button" class='btn btn-danger' 
							onclick="if(confirm('Deseja realmente excluir?')){
										location.href='index.php?page=salvar&acao=excluir&id=<?php print $row["id"]; ?>&cat=p'
									 }else{
										cancel
									 }">Excluir</button>
			</div>
		</div>
	</form>
</fieldset>

<?php
	}
?>
