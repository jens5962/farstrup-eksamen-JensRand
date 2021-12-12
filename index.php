<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Produkter</title>
</head>
<body>
	<!-- Produkt navn -->
	<h1>"Produkt navn"</h1>

	<!-- Info/specifikationer -->
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

	<!-- Farve valg/drodown liste -->
	<p> <strong>Vælg stof/læder & træ farve</strong> </p>
	
	<form>
		<div>
			<label>Stof/læder farve</label>
			<select name="Stof/læder farve">
				<option value="Hvid">Hvid</option>
				<option value="Blå">Blå</option>
				<option value="Sort">Sort</option>
				<option value="Brun">Brun</option>
				<option value="Grå">Grå</option>
			</select>	
			
			<br><br>

			<label>Træ farve</label>
			<select name="Træ farve">
				<option value="Sort">Sort</option>
				<option value="Hvid">Hvid</option>
				<option value="Ibenholt">Ibenholt</option>
				<option value="Birk">Birk</option>
				<option value="Eg">Eg</option>
				<option value="Mahogni">Mahogni</option>
			</select>

		<!-- Læg i kurv knap --> 
		<br><br><br>
		
		<input type="submit" name="kurvknap"
		value="Læg i kurv">
		</div>
	</form>

	<!-- Billeder -->
	<img>
</body>
</html>