<?php 

	$sql = "SELECT * FROM cliente WHERE id = ".$_REQUEST["id"];

	$res = mysql_query($sql,$con);
	
	if(mysql_num_rows($res) >= 1){
		$row = mysql_fetch_array($res);	
?>

<h1 class="page-header">Editar Cliente #<?php print $row["id"]; ?></h1>
<fieldset>	
	<form class="form-horizontal" role="form" action="?page=salvar&acao=editar&cat=c" method="post">
		<input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>" /> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome" value="<?php print $row["nome"]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="email">Email:</label>
			<div class="col-sm-10"> 
				<input type="email" class="form-control" id="email" name="email" placeholder="Insira o email" value="<?php print $row["email"]; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="telefone">Telefone:</label>
			<div class="col-sm-10">
				<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Insira o telefone" value="<?php print $row["telefone"]; ?>">
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Salvar</button>
				<button type="button" class='btn btn-danger' 
							onclick="if(confirm('Deseja realmente excluir?')){
										location.href='index.php?page=salvar&acao=excluir&id=<?php print $row["id"]; ?>&cat=c'
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
