<?php
	$sql = "SELECT * FROM cliente ORDER BY id";
	$res = mysql_query($sql,$con);
?>
<h1 class="page-header">Clientes</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Telefone</th>
			</tr>
		</thead>
		<?php
			if(mysql_num_rows($res) >= 1){
				while($row = mysql_fetch_array($res)){
					print"
					<tbody>
					<tr>
						<td>".$row["id"]."</td>
						<td><a href='?page=editar_cliente&id=".$row["id"]."'>".$row["nome"]."</a></td>
						<td>".$row["email"]."</td>
						<td>".$row["telefone"]."</td>
					</tr>
					</tbody>";
				}
			}
		?>
	</table>
</div>
