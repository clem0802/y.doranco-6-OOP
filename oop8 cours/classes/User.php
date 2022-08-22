<?php
class User {
	private $email;
	private $username;
	private $password;

	public function __construct($email, $username, $mdp) {
		$this->email = $email;
		$this->username = $username;
		$this->password = $mdp;
	}

	//Methodes d'instanciation
	public function renderUser() {
		echo '
              <div>
                <h2>' . $this->username . '</h2>
                <p>' . $this->email . '</p>
              </div>
                    ';
	}
	//GETTERS
	public function getUsername() {
		return $this->username;
	}
	public function getEmail() {
		return $this->email;
	}

	//SETTERS
	public function setUsername($newUsername) {
		$this->username = $newUsername;
		return $this;
	}

	public function setEmail($newEmail) {
		$this->email = $newEmail;
		return $this;
	}

	//Methodes statiques
	public static function sayHello() {
		$test = "test";
		echo 'Salut je suis la classe User';
		return $test;
	}

	public static function renderUsers($users) {
		foreach ($users as $key => $user) {
			$user->renderUser();
		}
	}

}