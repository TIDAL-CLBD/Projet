<?php

class User {

	private $lastname;
	private $firstname;
	private $username;
	private $password;
	private $birthday;



	public function __construct($lastname, $firstname, $username, $password, $birthday)
	{
		$this->lastname = $lastname;
		$this->firstname = $firstname;
		$this->username = $username;
		$this->password = $password;
		$this->birthday = $birthday;
	}


	public function __toString()
	{
		return "Nom : ".$this->lastname.", Prénom : ".$this->firstname.", Utilisateur : ".$this->username.", MDP : ".$this->password.", Date de naissance : ".$this->birthday;
	}


	private function init_bd()
	{
		$acubd = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', '');		
		return $acubd;
	}


	public function __set($property, $value) 
	{
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}

	public function insert()
	{
		$acubd = $this->init_bd();
		$req = $acubd->prepare('INSERT INTO user(Nom, Prenom, idUT, Mdp, DateNaissance) VALUES(:lastname, :firstname, :username, :password, :birthday)');
		$req->execute(array(
			'lastname' =>$this->lastname,
			'firstname'=>$this->firstname,
			'username'=>$this->username,
			'password'=>$this->password,
			'birthday'=>$this->birthday));
		$result = $req->fetch();
		if($result){
			header('Location: accueil.php');
		}
	}

	public function login()
	{
		$acubd = $this->init_bd();
		$req = $acubd->prepare('SELECT idUT,Mdp FROM user WHERE idUT=:username AND Mdp=:password');
		$req->execute(array(
			'username'=>$this->username,
			'password'=>$this->password));
		$result = $req->fetch();
		if($result){
			session_start();
			$_SESSION["username"] = $this->username;
			header('Location: accueil.php');
		} else {
			echo "<script>console.log('Try Again');</script>";
		}
	}

	public function update()
	{
		$acubd = $this->init_bd();
		$req = $acubd->prepare('UPDATE user SET Nom=:lastname,Prenom=:firstname,Mdp=:password,DateNaissance=:birthday WHERE idUt=:username');
		$req->execute(array(
			'lastname' =>$this->lastname,
			'firstname'=>$this->firstname,
			'password'=>$this->password,
			'birthday'=>$this->birthday,
			'username'=>$this->username));
		$result = $req->fetch();
		if($result){
			header('Location: accueil.php');
		} else {
			echo "<script>console.log('Try Again');</script>";
		}	
	}

}

?>
