<?php
$message = null;
if(array_key_exists("error", $_GET)){
   $error =(int) htmlspecialchars($_GET["error"]);
   
   
   switch ($error) {
      case 401:
         $message = "Feld darf nicht leer sein!";
         break; 
   } 
}

?>
<html>
<head>
<title>website</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Namenspeicher</h1>
<form action="name.php" method="POST">
<div class="Label">
 <label for="Test" class="Schriftart<?=($message)?' haserror':''?>"  >Bitte gib deinen Namen ein!</label>
    </div>
 <input class="<?=($message)?' haserror':''?>" type="search" name="Inhalt">
<div class="Button">
<button name="Test" type="submit" >Absenden</button>
</div>
</form>
<a> Dein Name wird zur Identifizierung genutzt. </a>
<?php if($message):?>
   <script>alert("<?=$message?>");</script>
   <?php endif; ?>
</body>
</html>
