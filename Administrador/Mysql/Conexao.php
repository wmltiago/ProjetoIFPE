<?php


	try{
	$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root','');
	}catch(PDOException $e){
	echo 'ERROR: ' . $e->getMessage();
 

} 


?>
