<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hjælp</title>
</head>
<body>
	
<p> <strong>Vælg stof/læder & træ farve</strong> </p>
			<!-- Drop down lister -->
	<form method="POST" input type="submit" action="cart.php" name="colors">
		
			<label>Stof/læder farve</label>
			<select name="fabriccolor" id="fabriccolor">
				<option value="Hvid">Hvid</option>
				<option value="Blå">Blå</option>
				<option value="Sort">Sort</option>
				<option value="Brun">Brun</option>
				<option value="Grå">Grå</option>
			</select>	
			
			<br><br>

			<label>Træ farve</label>
			<select name="woodcolor" id="woodcolor">
				<option value="Sort">Sort</option>
				<option value="Hvid">Hvid</option>
				<option value="Ibenholt">Ibenholt</option>
				<option value="Birk">Birk</option>
				<option value="Eg">Eg</option>
				<option value="Mahogni">Mahogni</option>
			</select>
		
			<!-- Knap -->
			<br><br>
			<input type="submit" name="colorbutton" value="Læg i kurv">
			
			<!-- If statement til at sende til cart.php -->
			<?php 
			if (isset($fabriccolor) || isset($woodcolor)) {
			$fabriccolor = $_POST["fabriccolor"]; 
			$woodcolor = $_POST["woodcolor"];
			}
			 ?>
	</form>
</body>
</html>