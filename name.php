<html>
<head>
<title>Test</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<p>
<form action="index.php">
    <label for="Zurück" >Willst du zurück?</label>
    <button name="Test" >OK </button>
</form>

<?php
$datei = "daten.txt";
$eingabe = strip_tags($_POST["Inhalt"]);
if(strlen($eingabe)==0){
  //continue;
  header('Location: index.php?error=401');
}
//exit;
echo "Hallo, ".$eingabe .", vor dir waren diese Personen hier:"; 
$fh = fopen($datei, "a+");
$eingabe =  $eingabe . PHP_EOL;
fwrite($fh , $eingabe);
rewind($fh);
$i = 0;
  while(!feof($fh)) {
    $namen = trim(fgets($fh));
    if(strlen($namen)==0){
      continue;
    }
    $i++;   
    echo "<br>" .$i .". " .$namen;
}

fclose($fh);
?>
 </p>
</body>
</html>
