<?php
	$sql = "SELECT * FROM produto ORDER BY id";
	$res = mysql_query($sql,$con);
?>
<h1 class="page-header">Produtos</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Descrição</th>
				<th>Preço</th>
			</tr>
		</thead>
		<?php
			if(mysql_num_rows($res) >= 1){
				while($row = mysql_fetch_array($res)){
					print"
					<tbody>
					<tr>
						<td>".$row["id"]."</td>
						<td><a href='?page=editar_produto&id=".$row["id"]."'>".$row["nome"]."</a></td>
						<td>".$row["descricao"]."</td>
						<td>R$ ".$row["preco"]."</td>
					</tr>
					</tbody>";
				}
			}
		?>
	</table>
</div>
