<?php 
$objetPdo = new PDO('mysql:host=localhost;dbname=agenda','root','');
$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES(NULL, :nom, :prenom, :tel, :mel)');
$pdoStat->bindValue(':nom',$_POST['lastName'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom',$_POST['firstName'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel',$_POST['phone'], PDO::PARAM_STR);
$pdoStat->bindValue(':mel',$_POST['mail'], PDO::PARAM_STR);
$insertIsOk=$pdoStat->execute();
if ($insertIsOk) {
	$message = "le contact a étè ajoutè dans la base de donnée" ;
}
else{
	$message = "erreur d'insertion" ;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> inserer dans une base de donnée </title>
</head>

<body>
	<h1>Insertion des contacts</h1>
	<p><?php echo $message;?></p>	
</body>
</html>
