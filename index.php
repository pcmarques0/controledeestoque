<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		
		<title>Controle de Estoque</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php include("config.php"); ?>
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="?">Controle de Estoque</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="?page=Clientes"><i class="icon-list"></i> Clientes</a></li>
						<li><a href="?page=Produtos"><i class="icon-book"></i> Produtos</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="?page=cadastrar_cliente">Cliente</a></li>
								<li><a href="?page=cadastrar_produto">Produto</a></li>
								<li><a href="?page=inserir_pedido">Pedidos</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		
		<div class="container">

			<?php  
					if(isset($_REQUEST["page"])){
						switch($_REQUEST["page"]){
							case "Produtos":
								include("produtos.php"); 
							break;
							case "Clientes":
								include("clientes.php"); 
							break;
							case "busca":
								include("busca.php"); 
							break;
							case "editar_produto":
								include("editar_p.php"); 
							break;
							case "editar_cliente":
								include("editar_c.php"); 
							break;
							case "salvar":
								include("salvar.php"); 
							break;
							case "cadastrar_produto":
								include("cadastrar_p.php"); 
							break;
							case "cadastrar_cliente":
								include("cadastrar_c.php"); 
							break;
							case "inserir_pedido":
								include("pedido_i.php"); 
							break;
							default:
								include("pedidos.php"); 
						}
					}else include("pedidos.php");
				?>
		</div>

		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
