<?php 
namespace app\controller;

require "vendor/autoload.php";
use app\model\ContactManager;

class controller_back
{
	function openHome() // Afficher le formulaire d'inscription
	{
		require('app/view/template.php');
	}
}