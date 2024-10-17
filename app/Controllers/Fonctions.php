<?php

function connect_bd($nomBd)
{
	$nomServeur='localhost';
	$login='root';
	$passWd='';
	try
	{
		$cnx = new PDO("mysql:host=localhost;dbname=$nomBd", $login, $passWd);
		$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$cnx->exec("SET CHARACTER SET utf8");
		return $cnx;
	}
	catch (PDOException $e) 
	{
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
}



function deconnect_bd($nomBd) 
{ 
	$nomBd = null; 
}

