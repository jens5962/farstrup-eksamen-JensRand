<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Produkter</title>
</head>
<body>
<header>
	<!-- Produkt navn -->
	<h1>"Produkt navn"</h1>
</header>

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


	<!-- Farve valg/drodown liste -->
<?php
include "colormenu.php";
?>


		<!-- Læg i kurv knap --> 
		<br><br><br>
	<form>
		<div>
		<input type="submit" name="kurvknap"
		value="Læg i kurv">
		</div>
	</form>


<?php
//Inkludere "images.php" hvor alle billederne er
include "images.php";
?>


</body>
</html>