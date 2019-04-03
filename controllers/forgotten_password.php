<?php
//changement mot de passe
require_once('../modeles/connexion.php');
if(isset($_POST['login']) and isset($_POST['new_mdp']))
{
	$pseudo = $_POST['login'];
	$newmdp = $_POST['new_mdp'];
$reponse=$bdd->prepare('select count(*)	as nb from utilisateur where pseudo=?');
$reponse->execute(array($_POST['login']));

$donnee=$reponse->fetch();
if ($donnee['nb']==1)
{
	$reponse=$bdd->prepare("UPDATE utilisateur SET password='$newmdp' WHERE pseudo = '$pseudo'");
	$reponse->execute();
	echo "Modification effectuée";
}
else
	echo "Erreur d'identifiants";

}
?>