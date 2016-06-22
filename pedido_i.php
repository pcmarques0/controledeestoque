<h1 class="page-header">Inserir Pedido</h1>
<fieldset>	
	<form class="form-horizontal" role="form" action="?page=salvar&acao=cadastrar&cat=np" method="post">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Cliente:</label>
			<div class="col-sm-10">
				<select class="form-control" id="sel_cliente" name="sel_cliente">
				<?php
					$sql_cli = "SELECT c.id as idcliente, c.nome as nomecliente FROM cliente c";
					$res_cli = mysql_query($sql_cli,$con);
					if(mysql_num_rows($res_cli) >= 1){
						while($row_cli = mysql_fetch_array($res_cli)){
							print"<option value=".$row_cli["idcliente"].">".$row_cli["nomecliente"]."</option>";
						}
					}
				?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="preco">Produto:</label>
			<div class="col-sm-10"> 
				<select class="form-control" id="sel_produto" name="sel_produto">
				<?php
					$sql_prod = "SELECT p.id as idproduto, p.nome as nomeproduto FROM produto p";
					$res_prod = mysql_query($sql_prod,$con);
					if(mysql_num_rows($res_prod) >= 1){
						while($row_prod = mysql_fetch_array($res_prod)){
							print"<option value=".$row_prod["idproduto"].">".$row_prod["nomeproduto"]."</option>";
						}
					}
				?>
				</select>
			</div>
		</div>
		<div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Gravar Pedido</button>
			</div>
		</div>
	</form>
</fieldset>
