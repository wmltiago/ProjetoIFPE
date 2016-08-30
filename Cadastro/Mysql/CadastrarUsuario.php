<?php
try{
$conexao = new PDO('mysql:host=localhost;dbname=comidaemcena','root','');
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 


} 

        $Nome= $_POST["nomeusuario"]; 
	$Senha= $_POST["senhausuario"]; 
	$Email= $_POST["emailusuario"]; 
	$DataNascimento= $_POST["datanascusuario"]; 
	$Username= $_POST["username"]; 	
        $Estado= $_POST["estadousuario"];


$stmt = $conexao->query("select * from usuario where email_usuario='$Email' and username='$Username'");

$contagem = $stmt->rowCount();

if ( $contagem == 0  ) {
$stmt = $conexao->prepare("insert into usuario(nome_usuario,estado_usuario,data_usuario,username,email_usuario,senha_usuario) values (?,?,?,?,?,?)");
	
	

	$stmt -> bindParam(1,$Nome);
	$stmt -> bindParam(2,$Estado);
	$stmt -> bindParam(3,$DataNascimento);
	$stmt -> bindParam(4,$Username); 
	$stmt -> bindParam(5,$Email);	
	$stmt -> bindParam(6,md5($Senha));
	


$stmt->execute(); 



header('Location: ../../Livro.php');

  
}else{

echo "Email ou Username já cadastrado<br> <a href='../../Livro.php'>INDEX</a>";}
  
	
	


?>
