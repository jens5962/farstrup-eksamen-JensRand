<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Produkter</title>

<!-- Produkt navn -->
<header id="main-header">
	<h1>"Produkt navn"</h1>
	<style>
		#main-header{
			text-align:center;
		}
	</style>
	</header>
</head>
<body>


<!-- Farve valg/drodown liste -->
<aside style="font-size:larger;float:right;width:350px">
<?php
include "colormenu.php";
?>
</aside>


<?php
//Inkludere "images.php" hvor alle billederne er
include "images.php";
?>


<!-- Info/specifikationer -->
<blockquote>
<article>
	<p> <strong>Information</strong> </p>
	<p> "Produkt navn" er lavet i... </p>
	<p> <strong>Specifikationer</strong> </p>
	

	<!-- Mål liste -->
	<p> Mål: </p>
	<ul> 
		<li> x cm høj </li>
		<li> x cm lang </li>
		<li> x cm bred </li>
	</ul>


	<!-- Hjælp -->
	<p> <strong>Hjælp</strong> </p>
	<p> Tryk <a href=<?php echo "help.php"?>>her </a> for hjælp til vores produkter. </p>
</article>
</blockquote>

</body>
</html>