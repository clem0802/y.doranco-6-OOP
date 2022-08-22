<?php
class Personne {
	//Proprietes
	private $firstName;
	private $lastName;

	//Le constructeur
	public function __construct($nom, $prenom) {
		$this->lastName = $nom;
		$this->firstName = $prenom;
	}
	//Les méthodes
	public function renderPersonne() {
		echo '<div>
                <p>Nom: ' . $this->lastName . '</p>
                <p>Prenom: ' . $this->firstName . '</p>
              </div>';
	}
	//GETTERS
	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	//SETTERS
	public function setLastName($newLastName) {
		$this->lastName = $newLastName;
		return $this;
	}

	public function setFirstName($newFirstName) {
		$this->firstName = $newFirstName;
		return $this;
	}
}