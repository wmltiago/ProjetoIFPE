<html>

<head>
<meta charset="utf-8">
<!--Esse é do site -->
<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<link href="Styles/Style.css" rel="stylesheet">
<!--Esse é do site -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>

</head>
<body>
<div id="TOPO"><img  id="LOGO"src="Imagens/LOGO.png">
<div id="BOTOES"><h2 id="Bfilme" href=""><a href="Receitas/Index.php">Filmes</a></h2>
<h2 id="Breceita" ><a href="Receitas/Index.php">Receitas</a></h2> 
</div>
<div id="LoginCadastro">
<?php session_start();
if (isset($_SESSION["Email"])){ 
$Username =$_SESSION['Username'];
 echo "<a id='username' href='Administrador/Index.html' ><h2 >$Username</h2></a>";  ?>


<a  id="sair" href="Cadastro/Mysql/Sair.php"><h2>Sair</h2></a>
<?php
}else{

?>
<a id="Login" href="Cadastro/Login.html" ><h2 >Login</h2></a>
<a  id="Cadastro" href="Cadastro/Cadastre-se.html"><h2 >Cadastre-se</h2></a>
<?php
}

?>

 </div> 
<div id="pesquisa"><input id="campopesquisa" type="text" placeholder=" Algo à procurar ?<icone de lupa>"></div>
 </div>
<div id="Carrossel">
<!--Esse é o inicio do carrossel -->
<?php 
include("Carrossel/ScriptCarrossel.php");

?>
<?php 
include("Carrossel/BodyCarrossel.php");

?>
</div>
<div id="NovidadesFilmes"><center><h1 id="Fnome">- Novidades em Filmes -</h1></center>
<div id="Filme1"><center><h2>Esquadrão Sucida</h2><img class="NovidadesIMG" src="Imagens/Filme1.jpeg"></center></div>
<div id="Filme2"><center><h2>As Tartarugas Ninjas</h2><img class="NovidadesIMG" src="Imagens/Filme2.jpg"></center></div>
<div id="Filme3"><center><h2>Invocação do Mal</h2><img class="NovidadesIMG" src="Imagens/Filme3.jpg"></center></div>

</div>

<div id="NovidadesReceitas"><center><h1 id="Rnome">- Novidades em Receitas -</h1></center>
<div id="Receita1"><center><h2>Bolo de Coco</h2><img class="NovidadesIMG" src="Imagens/Receita1.jpg"></center></div>
<div id="Receita2"><center><h2>Camarão Dourado</h2><img class="NovidadesIMG" src="Imagens/Receita2.jpg"></center></div>
<div id="Receita3"><center><h2>Mini Cupcake</h2><img class="NovidadesIMG" src="Imagens/Receita4.png"></center></div>

</div>


</body>

</html>
