<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../Styles/StyleGeral.css">
<meta charset ="utf-8">
<title>Filmes</title>
<?php
include("CarrosselAcao/ScriptCarrosselAcao.php");

?>

</head>


<body>
<div id="Ação"><h1>Ação</h1>


<?php
include("CarrosselAcao/BodyCarrosselAcao.php");
?>


</div>
<div id="Romance"><h1>Romance</h1></div>
<div id="Comédia"><h1>Comédia</h1></div>
<div id="Animação"><h1>Animação</h1>

<?php
include("CarrosselAnimacao/BodyCarrosselAnimacao.php");
?>


</div>
<div id="Aventura"><h1>Aventura</h1></div>
<div id="Terror"><h1>Terror</h1></div>
<div id="Drama"><h1>Drama</h1></div>


</body>





</html>