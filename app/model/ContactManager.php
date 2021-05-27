<?php
namespace app\model;

require "vendor/autoload.php";
use app\model\Manager;

class ContactManager extends Manager 
{
	public function verifyEmail($email) // Vérification du pseudo existant
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT email FROM members WHERE email = :email"); 
        $req->execute(array('email' => $email));

        return $req;
    }
    public function sendMessage($name, $surname, $email, $subject, $message) // Inscription
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO contact(name, surname, email, subject, content) VALUES(:name, :surname, :email, :subject, :content)');
        $message = $req->execute(array(
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
        	'subject' => $subject,
        	'content' => $message));
        die(var_dump($message));

        return $message;
    }
}