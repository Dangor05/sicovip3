<?php 
     session_start();
     $Cedt = $_SESSION['Cedt'];
     $Cedp = $_SESSION['Cedp'];
     $mail= $_SESSION['mail'];
    
echo $Cedt;
echo $Cedp;
echo $mail;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="Home.php">Salir</a>

	<p><?php echo $_SESSION['Cedt']; ?></p>
	<p><?php echo $_SESSION['Cedp']; ?></p>
	<p><?php echo $_SESSION['mail']; ?></p>
</body>
</html>