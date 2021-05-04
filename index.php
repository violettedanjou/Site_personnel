<?php
// Afficher les message d'erreur php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "vendor/autoload.php";

use app\controller\controller_front;
use app\controller\controller_back;

try {
	if (isset($_GET['action'])) {

		// Page d'accueil
		if ($_GET['action'] == 'openHome') {
			$home = new controller_front();
			$home->openHome();
		}

		// Formulaire de contact
		if ($_GET['action'] == "validContact") {
			if (isset($_POST['name']) AND strlen($_POST['name']) != 0) {
				
				if (isset($_POST['surname']) AND strlen($_POST['surname']) != 0) {
					
		            if ((isset($_POST['email']))) {
		                $_POST['email'] = htmlspecialchars($_POST['email']);
		                
		                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) {

		                	if (isset($_POST['subject']) AND strlen($_POST['subject']) != 0) {
		                		
		                		if (isset($_POST['content']) AND strlen($_POST['content']) != 0) {
		                			$validContact = new controller_back();
									$validContact->validContact();
		                		}
		                		else {
		                			throw new \Exception("Ecrivez un message. ", 1);
		                		}
		                	}
		                    else {
		                    	throw new \Exception("Insérez un sujet. ", 1);
		                    }
	                    }
	                    else {
		                    throw new \Exception("L'adresse email n'est pas valide, recommencez. ", 1);
		                }   
	                }
		            else {
	                    throw new \Exception("Veuillez entrer correctement une adresse email. ", 1);
	                }
		        }    
	            else {
	                throw new \Exception("Veuillez saisir correctement votre nom. ", 1); 
	            }
	        }
	        else {
	            throw new \Exception("Veuillez saisir correctement votre prénom. ", 1); 
	        }
		}
	}
	else {
		$home = new controller_front();
		$home->openHome();
	}
}
catch(\Exception $e) {
    require('app/view/errorView.php');
}