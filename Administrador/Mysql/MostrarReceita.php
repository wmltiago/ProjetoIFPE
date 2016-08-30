<?php


		include("Conexao.php");

	
				
				$stmt = $conexao->query("nome_receita,imagem_receita,ingredientes,passo_a_passo,categoria_receita,codigo_receita  from receita");
			
				while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){



?>

<p><?php $linha["nome_receita"];?></p>	<br>
<p><?php $linha["imagem_receita"];?></p>	<br>
<p><?php $linha["ingredientes"];?></p>	<br>
<p><?php $linha["passo_a_passo"];?></p>	<br>
<p><?php $linha["categoria_receita"];?></p>	<br>
<p><?php $linha["codigo_receita"];?></p>	<br>

<?php
	
		
		}
?>