<?php

$conexao = new PDO("mysql:host=localhost;dbname=comidaemcena", "root", "");
	


 $Email=$_POST["emailusuario"];
 $Senha=$_POST["senhausuario"];
 $SenhaC= md5($Senha);

$stmt = $conexao->query("select * from usuario where email_usuario='$Email' and senha_usuario='$SenhaC'");

$contagem = $stmt->rowCount();

if ( $contagem == 1  ) {


session_start();

$_SESSION['Email'] = $Email;
$_SESSION['Senha']   = $SenhaC;
header('Location: ../../Livro.php');

  
}else{

echo "Login ou senha inválidos<br> <a href='../../Livro.php'>INDEX</a>";}

while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
$_SESSION['Username']     = $linha['username'];
 if ($linha['nivel_ADM'] > 0){
$_SESSION['ADM']  = $linha['nivel_ADM'];

header('Location: ../../Administrador/Index.html');
} 
}

?>


	 





 

 








