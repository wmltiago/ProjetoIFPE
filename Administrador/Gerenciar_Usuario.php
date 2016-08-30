<html>

	<head> 
			<link rel="stylesheet" type="text/css" href="Css/StyleG_Usuario.css">
			<meta charset="utf-8">
	
	</head>

<body>

	<h1>Gerenciando Usuários</h1>
	
	
<?php
	
	include("Mysql/Conexao.php");
		try{
			$stmt = $conexao->prepare("DELETE FROM usuario WHERE codigo_usuario=?;");

			$DeletaUsuario= $_POST["DeletaUsuario"];
			
			$stmt -> bindParam(1,$DeletaUsuario);
			
			$stmt->execute();
		}catch(PDOException $e){
			echo 'ERROR: ' . $e->getMessage();
} 	
			

?>		

<?php

	$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root','');

	try{
	$stmt = $conexao->query("select codigo_usuario,nome_usuario,username,senha_usuario, email_usuario from usuario");
	
	
	echo "<table border=1 class='TabelaUsuario'>";
	echo			"<tr>";
	echo				"<div>";
	echo					"<th>ID</th>";
	echo					"<th>NOME</th>";
	echo					"<th>USERNAME</th>";
	echo					"<th>SENHA</th>";
	echo					"<th>EMAIL</th>";
	echo				"</div>";	
	echo			"</tr>";
	
	while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
		
	
	
	echo			"<tr>";	
	echo				"<div>";
	echo					'<td>'.$linha["codigo_usuario"].'</td>';
	echo					'<td>'.$linha["nome_usuario"].'</td>';
	echo					'<td>'.$linha["username"].'</td>';
	echo					'<td>'.$linha["senha_usuario"].'</td>';
	echo					'<td>'.$linha["email_usuario"].'</td>';
	echo				"</div>";
	echo			"</tr>";	
	
	

	
	}
	echo		"</table>";
	
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>

		<div class="CampoExcluirUsuario">
			<form action="Gerenciar_Usuario.php" method="POST">
				
				<center>
					<label>Excluir Usuário</label>
						<input type="text" name="DeletaUsuario" placeholder="insira o ID do usuário..." />
					<button type="submit" name="BotaoDeletaUsuario">Excluir</button>
				</center>
				
			</form>
				
		</div>	
	
	
</body>
</html>
