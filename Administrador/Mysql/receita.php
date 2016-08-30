<?php


try{
$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root',"");

 
  
	
	$stmt = $conexao->prepare("insert into receita(nome_receita,imagem_receita,ingredientes,passo_a_passo,categoria_receita) values (?,?,?,?,?)");
	
	$Nomereceita= $_POST["nomereceita"]; 
	$Imagenreceita= $_POST["imagenreceita"]; 
	$Ingredientes= $_POST["ingredientes"]; 
	$PassoAPasso= $_POST["passoapasso"]; 
	$CategoriaReceita= $_POST["categoriareceita"]; 	
      

	$stmt -> bindParam(1,$Nomereceita);
	$stmt -> bindParam(2,$Imagenreceita);
	$stmt -> bindParam(3,$Ingredientes);
	$stmt -> bindParam(4,$PassoAPasso); 
	$stmt -> bindParam(5,$CategoriaReceita);
$stmt->execute(); 

}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 
}	
	try{
$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root','');

	$stmt = $conexao->prepare("insert into filme(nome_filme,imagem_filme,genero_filme,ano_filme,frase_filme,descricao_filme) values (?,?,?,?,?,?)");
	
	$Nomefilme= $_POST["nomefilme"]; 
	$Imagenfilme= $_POST["imagenfilme"]; 
	$Generofilme= $_POST["generofilme"]; 
	$Anofilme= $_POST["anofilme"]; 
	$Frasefilme= $_POST["frasefilme"]; 	
      $Descricaofilme= $_POST["descfilme"];

	$stmt -> bindParam(1,$Nomefilme);
	$stmt -> bindParam(2,$Imagenfilme);
	$stmt -> bindParam(3,$Generofilme);
	$stmt -> bindParam(4,$Anofilme); 
	$stmt -> bindParam(5,$Frasefilme);	
        $stmt -> bindParam(6,$Descricaofilme);
	
	$stmt->execute(); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 
}

 # Nome do arquivo html
$pagename = $_POST["nomereceita"];

# Texto a ser salvo no arquivo
$texto = "<html>
<head>
	<meta charset='utf-8'>
		<link rel='stylesheet' type='text/css' href='Css/StyleReceitas.css'>
		<title>$Nomereceita</title>
</head>
	<body class='CampoGeral'>
	<table>
	<tr>
	<td class='coluna1'>	
		<div class='CampoLogoFilme'><img src='$Imagenfilme'></div>	
		<div class='CampoIgredientesFixo'><p>Elenco & Apoio:</p></div>
		<div class='CampoIgredientes'><p>$Ingredientes</p></div>
	</td>	
	<td class='Coluna2'>	
		<div class='CampoNomeReceita'><p>$Nomereceita</p></div>
		<div class='CampoFraseFilme'><p>$Frasefilme</p></div>
		<div class='CampoImagemReceita'><img src='$Imagenreceita'></div>
		<div class='CampoDescricaoFilme'><p>$Descricaofilme</p></div>
	</td>
	<td class='Coluna3'>
		<div class='CampoPassoAPassoFixo'><p>Roteiro:</p></div>
		<div class='CampoPassoAPasso'><p>$PassoAPasso</p></div>
	</td>
	</tr>
	</table>
	</body>

</html>"; 

#Criar o arquivo
$fp = fopen("../../Receitas/".$pagename.".php", "w");
$fw = fwrite($fp, $texto);

#Verificar se o arquivo foi salvo.
if($fw == strlen($texto)) {
   echo 'Arquivo criado com sucesso!!';
}else{
   echo 'falha ao criar arquivo';
}





?>
