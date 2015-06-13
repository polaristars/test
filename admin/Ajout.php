<?php
require_once'Bdd.php';
require_once'Admin.php';
class Ajout extends Admin
{
	public function __construct()
	{
		parent::__construct();
	}
	public function projet() {
		if(!empty($_FILES))
		{
			$valide = array('php' , 'js' , 'css' , 'jpg', 'jpeg', 'png', 'gif', 'sql');
			if($_FILES['projets']['error'] > 0)
			{
				$erreur = "erreur lors du transfert";
			}
			$type_file = $_FILES['projets']['type'];
			if(!strstr($type_file, 'php') && !strstr($type_file, 'js') && !strstr($type_file, 'css') && !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'png') && !strstr($type_file, 'gif') && !strstr($type_file, 'sql'))
			{
				$erreur = "Le fichier séléctionné n'est pas bon";
			}
			$name_file = $_FILES['projets']['tmp_name'];
			if(preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file))
			{
				$erreur = "Nom de fichier non valide";
			}
			$id_user = $_SESSION['user']['id_user'];

			$name = "projetsDossier/" . $type_file;

			move_uploaded_file($name_file, $name);

			parent::whereisproject($placeholder);

			$erreur = array("Ajout fait !");
			return $erreur;	
		}	
	}	
}