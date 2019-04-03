<?php
//connexion base
try{
    $bdd = new PDO('mysql:host=localhost;dbname=utilisateur;charset=utf8', 'root', '');
	//echo "connexion base OK";
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());	
}
?>