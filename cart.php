<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurv</title>
</head>
<body>
  <!-- Kurv -->
  <p> <strong>Kurv</strong> </p>
    <p> Din kurv indeholder: </p>


  <!-- If statement til at modtage information fra dropdown menuer -->
<pre>
<?php
if(isset($_POST["fabriccolor"]) && isset($_POST["woodcolor"])) {
  $fabriccolor = $_POST["fabriccolor"];
  $woodcolor = $_POST["woodcolor"];
  echo "Møbel i:<br>";
  echo "<b>$fabriccolor</b> Stof/læder farve.<br>&<br>";
  echo "<b>$woodcolor</b> Træ farve.";
}
else{
  echo "Kurven er tom";
}
?>
</pre>

</body>
</html>