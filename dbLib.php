<?php
$username = 'root';
$password = 'hCmR2ARr';
try 
	{
    $connection = new PDO('mysql:host=127.0.0.1;dbname=db1063074_arkadaspb', $username, $password, array(
    PDO::ATTR_PERSISTENT => true));
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $connection->prepare("SET NAMES 'utf8'");
	$stmt->execute();
	} 
		catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>
