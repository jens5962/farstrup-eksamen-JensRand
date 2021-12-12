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
	
	<form method="POST">
		
			<label>Stof/læder farve</label>
			<select name="fabriccolor">
				<option value="Hvid">Hvid</option>
				<option value="Blå">Blå</option>
				<option value="Sort">Sort</option>
				<option value="Brun">Brun</option>
				<option value="Grå">Grå</option>
			</select>	
			
			<br><br>

			<label>Træ farve</label>
			<select name="woodcolor">
				<option value="Sort">Sort</option>
				<option value="Hvid">Hvid</option>
				<option value="Ibenholt">Ibenholt</option>
				<option value="Birk">Birk</option>
				<option value="Eg">Eg</option>
				<option value="Mahogni">Mahogni</option>
			</select>
		<?php //<input type="submit" name="farve" value="Send"> ?>
	</form>
	
<?php
if(isset($_POST["color"])) {
	$varName = $_POST["fabriccolor"];
	$varName = $_POST["woodcolor"];
}
?>


</body>
</html>


<?php
//if(isset($_POST["woodcolor"])) {
//	echo "valgte farver: ".htmlspecialchars($_POST["woodcolor"]);
//}