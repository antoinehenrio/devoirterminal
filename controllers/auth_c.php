<?php
//authentification
require_once('../modeles/connexion.php');
if(isset($_POST['pseudo']) and isset($_POST['password']))
{
$reponse=$bdd->prepare('select count(*)	as nb from utilisateur where pseudo=? and password= ?');
$reponse->execute(array($_POST['pseudo'], $_POST['password']));

$donnee=$reponse->fetch();
if ($donnee['nb']==1)
	echo "Bonne identification";
else
	echo "Erreur de saisie";

}
?>