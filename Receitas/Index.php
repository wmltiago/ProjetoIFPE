<html>
<head>
<link rel="stylesheet" type="text/css" href="Css/StyleIndex.css">
<title>ComidaEmCena - Receitas</title></head>
<body><center><h1>Receitas</h1></center>
<?php

	$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root','');

	try{
	$stmt = $conexao->query("select nome_receita,imagem_receita from receita");
	echo "<center><div id='tudo'>";
    $contador = 0;
		echo "<table border=0 class='TabelaReceita'>";
	echo "<tr>";
	while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
	$nome_receita = $linha['nome_receita'];	
	$imagem_receita = $linha['imagem_receita'];

	if($contador++ % 5 != 0){

	echo "<td>";
	
	echo "<div id='receita'>";
    echo "<div id='nome'><H3>$nome_receita</H3> </div>";
    echo "<div id='imagem' ><a href='$nome_receita.php'><img src='$imagem_receita'></a> </div>";
  
	echo "</td>";
	
	echo "</div>";
	}else{
		echo "</tr><tr>";
		
	}
	
	}
	echo "</tr>";
	echo "</table>";
	echo "</div></center>";
	}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
} 
?>
</body>
</html>