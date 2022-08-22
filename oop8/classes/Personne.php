<?php 
include_once '../classes/Affichable.php';

    class Personne implements Affichable{
        // propriétés
        protected $firstName;
        protected $lastName;

        // le constructeur
        public function __construct($prenom, $nom){
            $this->firstName = $prenom;
            $this->lastName = $nom;
        }

        // les méthodes 
        public function renderPersonne(){
            echo '<div>
                <p>Prénom: ' . $this->firstName . '</p>
                <p>Nom: ' . $this->lastName . '</p>
            </div>';
        }

        // méthodes GETTERS:
        // (les accesseurs) GETTER => pr récupérer la valeur des attributs
        public function getFirstName(){
            return $this->firstName;
        }
        public function getLastName(){
            return $this->lastName;
            echo "<br>";
        }
        // ci-dessous pour Affichable.php
        public function getName(){
            return $this->firstName . ' '. $this->lastName;
        }


        // méthodes SETTERS:
        // (les mutateurs) SETTER => pr modifier la valeur des attributs
        public function setFirstName($newFirstName){
            $this->firstName = $newFirstName;
            return $this;
        }
        public function setLastName($newLastName){
            $this->lastName = $newLastName;
            return $this;
            echo "<br>";
        }

        // semaine PROJET du 22/08
        public function render(){
            echo '<p>Je suis une personne</p>';
            $this->renderPersonne();
        }
    }


    class Eleve extends Personne{
        private $cours;
        public function __construct($nom, $prenom, $cours){
            parent::__construct($nom, $prenom);
            $this->cours = $cours;
        }

        public function getCours(){
            return $this->cours;
        }
        public function addCours($newCours){
            array_push($newCours);
        }

        public function renderCours(){
            var_dump($this->cours);
            foreach($this->cours as $key =>$value){
                echo '<p>' . $value . '</p>';
            }
        }

        // ici ça OVERRIDE la fonction renderPersonne() du parent
        // si firstName et lastName du parent sont "protected"
        // en base ce sera <p>' . $this->firstName() . '</p>
        public function renderPersonne(){
            echo '<div>
                    <p>' . $this->getFirstName() . '</p>
                    <p>' . $this->getLastName() . '</p>
                </div>
            ';
            $this->renderCours(); 
        }
    }
?>