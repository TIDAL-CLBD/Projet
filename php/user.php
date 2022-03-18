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
		$user = 'pgtidal';
		$passwd = 'tidal';
		$dsn = "pgsql:host=localhost;port=5432;dbname=acudb;";
		$acudb = new PDO($dsn,$user, $passwd);
		return $acudb;
	}


	public function __set($property, $value) 
	{
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}

	public function insert()
	{
		$acudb = $this->init_bd();
		$req = $acudb->prepare('INSERT INTO user(nom, prenom, idut, mdp, datenaissance) VALUES(:lastname, :firstname, :username, :password, :birthday)');
		$req->execute(array(
			'lastname' =>$this->lastname,
			'firstname'=>$this->firstname,
			'username'=>$this->username,
			'password'=>$this->password,
			'birthday'=>$this->birthday));
		$result = $req->fetch();
		if($result){
			echo "<script>window.alert(\"Inscription réussie\");</script>";
			header('Location: index.php');
		}
	}

	public function login()
	{
		$acudb = $this->init_bd();
		$req = $acudb->prepare('SELECT idut,mdp FROM user WHERE idut=:username AND mdp=:password');
		$req->execute(array(
			'username'=>$this->username,
			'password'=>$this->password));
		$result = $req->fetch();
		if($result){
			session_start();
			$_SESSION["username"] = $this->username;
			echo "<script>window.alert(\"Connexion réussie\");</script>";
			header('Location: index.php');
		} else {
			echo "<script>console.log('Réessayez');</script>";
		}
	}

	public function update()
	{
		$acudb = $this->init_bd();
		$req = $acudb->prepare('UPDATE user SET Nom=:lastname,Prenom=:firstname,mdp=:password,datenaissance=:birthday WHERE idut=:username');
		$req->execute(array(
			'lastname' =>$this->lastname,
			'firstname'=>$this->firstname,
			'password'=>$this->password,
			'birthday'=>$this->birthday,
			'username'=>$this->username));
		$result = $req->fetch();
		if($result){
			header('Location: index.php');
		} else {
			echo "<script>console.log('Réessayez');</script>";
		}
	}
}
?>
