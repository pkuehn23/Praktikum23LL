<html>
<head>
<title>Test</title>
</head>
<body>
 <?php
$eingabe = strip_tags($_POST["Inhalt"]);
 echo "Hallo, ".$eingabe
 ?>
<form action="test.php">
    <label for="Zurück" >Willst du zurück?</label>
    <button name="Test" >OK </button>

</body>
</html>