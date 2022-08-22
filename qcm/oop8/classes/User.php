<?php
class User {
	public $email;
	public $username;
	public $password;

	public function __construct($email, $username, $mdp) {
		$this->email = $email;
		$this->username = $username;
		$this->password = $mdp;
	}

	public function renderUser() {
		echo '
              <div>
                <h2>' . $this->username . '</h2>
                <p>' . $this->email . '</p>
              </div>
                    ';
	}
}