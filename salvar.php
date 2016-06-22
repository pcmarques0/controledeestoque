<?php

	switch($_REQUEST["acao"]){
		case "editar":
			switch($_REQUEST["cat"]){
				case "c":
					$nome = $_REQUEST["nome"];
					$email = $_REQUEST["email"];
					$telefone = $_REQUEST["telefone"];
					$sql = "UPDATE cliente SET
								nome = '".$nome."',
								email = '".$email."',
								telefone = '".$telefone."'
							WHERE id = ".$_REQUEST["id"]."
						";
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Editado');</script>";
						print "<script>location.href='?page=editar_cliente&id=".$_REQUEST["id"]."';</script>";
					}else{
						print "Não editou<br>";
						print $sql;
					}
				break;
				case "p":
					$nome = $_REQUEST["nome"];
					$preco = $_REQUEST["preco"];
					$descricao = $_REQUEST["descricao"];
					$sql = "UPDATE produto SET
								nome = '".$nome."',
								preco = '".$preco."',
								descricao = '".$descricao."'
							WHERE id = ".$_REQUEST["id"]."
						";
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Editado');</script>";
						print "<script>location.href='?page=editar_produto&id=".$_REQUEST["id"]."';</script>";
					}else{
						print "não editou<br>";
						print $sql;
					}
				break;
			}
		break;
		
		case "excluir":
			switch($_REQUEST["cat"]){
				case "c":
					$sql = "DELETE FROM cliente 
					WHERE id = ".$_REQUEST["id"];
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Excluído');</script>";
						print "<script>location.href='index.php?page=Clientes';</script>";
					}else{
						print "não excluiu<br>";
						print $sql;
					}
				break;
				case "p":
					$sql = "DELETE FROM produto 
					WHERE id = ".$_REQUEST["id"];
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Excluído');</script>";
						print "<script>location.href='index.php?page=Produtos';</script>";
					}else{
						print "não excluiu<br>";
						print $sql;
					}
				break;

			}
		break;
		
		case "cadastrar":
			switch($_REQUEST["cat"]){
				case "c":
					$nome = $_REQUEST["nome"];
					$email = $_REQUEST["email"];
					$telefone = $_REQUEST["telefone"];
					$sql = "INSERT INTO cliente (nome, email, telefone) 
							VALUES ('".$nome."', '".$email."', '".$telefone."')
						";
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Cadastrado');</script>";
						print "<script>location.href='index.php?page=Clientes';</script>";
					}else{
						print "não cadastrou<br>";
						print $sql;
					}
				break;
				case "p":
					$nome = $_REQUEST["nome"];
					$preco = $_REQUEST["preco"];
					$descricao = $_REQUEST["descricao"];
					$sql = "INSERT INTO produto (nome, preco, descricao) 
							VALUES ('".$nome."','".$preco."','".$descricao."')
						";
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Cadastrado');</script>";
						print "<script>location.href='index.php?page=Produtos';</script>";
					}else{
						print "não cadastrou<br>";
						print $sql;
					}
				break;
				case "np":
					$idproduto = $_REQUEST["sel_produto"];
					$idcliente = $_REQUEST["sel_cliente"];
					$sql = "INSERT INTO pedido (id_produto, id_cliente) 
							VALUES ('".$idproduto."','".$idcliente."')
						";
					$res = mysql_query($sql,$con);
					if($res == true){
						print "<script>alert('Cadastrado');</script>";
						print "<script>location.href='index.php?page=Pedidos';</script>";
					}else{
						print "não cadastrou<br>";
						print $sql;
					}
				break;
			}
		break;

	}

?>
