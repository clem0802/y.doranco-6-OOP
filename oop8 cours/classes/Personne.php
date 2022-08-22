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

class Eleve extends Personne {
	private $cours;
	public function __construct($nom, $prenom, $cours) {
		parent::__construct($nom, $prenom);
		$this->cours = $cours;
	}

	public function getCours() {
		return $this->cours;
	}

	public function addCours($newCours) {
		array_push($newCours);
	}

	public function renderCours() {
		foreach ($this->cours as $key => $value) {
			echo '<p>' . $value . '</p>';
		}
	}
	//Override/Réecrire la fonction renderPersonne déclarer dans La classe Personne
	public function renderPersonne() {
		echo '
            <div>
                <p>' . $this->getFirstName() . '</p>
                <p>' . $this->getLastName() . '</p>
            </div>
        ';
		$this->renderCours();
	}
}