<?php
    $pdo = new PDO('mysql:host=localhost; dbname=moviecards;charset=utf8', 'root', '');
    $city = "Kfar Saba";
    $statement=$pdo->prepare("SELECT * FROM halls");
    $statement->execute();
    $results=$statement->fetchAll(PDO::FETCH_ASSOC);
    $json =  json_encode($results);
    
    $stmt = $pdo->prepare("INSERT INTO `halls`(`city`) 
    VALUES (:city)");
    $stmt->bindParam(':city', $city);

    $dbh = new PDO('mysql:host=localhost; dbname=moviecards;charset=utf8', 'root', '',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
					
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//return $dbh;


$sql = "INSERT INTO `halls`(`city`) 
    VALUES (:city)";
	
//$db = chooseCity();

$stmt = $dbh->prepare($sql);  
$stmt->bindParam(':city',$city);
$stmt->execute();

//$res = $stmt->fetchObject();
$dbh = null;
?>