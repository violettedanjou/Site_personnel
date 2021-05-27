<?php 
namespace app\controller;

require "vendor/autoload.php";
use app\model\ContactManager;

class controller_back
{
	function validContact() // Afficher le formulaire d'inscription
	{
		$contactManager = new ContactManager();
		$emailExist = $contactManager->verifyEmail($_POST['email']);

		$nbrResult = $emailExist->rowCount();
		if ($nbrResult == 0) {
			$contactManager = new ContactManager();
	    	$newMessage = $memberManager->sendMessage($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['subject'], $_POST['content']);

	    	header('Location: index.php');
		}
		else {
			throw new \Exception("Email déjà utilisez. Essayez autre chose.", 1);
		}

		require('app/view/template.php');
	}
}