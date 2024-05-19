<?php

 /*

try

 

{

$bdd = new PDO ("'mysql:host=localhost; dbname=techdym; charset=utf8','root', ''");
     

 }



  catch (Exception $e)


 {

 die ("Erreur:".$e->getmessage()); 

 }*/

 ?>

<?php
	try
	{
		$bdd= new PDO('mysql:host=localhost;dbname=cab','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage()); 
	}
?>