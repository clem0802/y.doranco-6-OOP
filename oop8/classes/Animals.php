<?php 
// include_once '/y.doranco-6-OOP/oop8/classes/Affichable.php';
include_once 'E:\C-VS(DO5-PHP)\MAMP\htdocs\y.doranco-6-OOP\oop8\classes\Affichable.php';

    // classe abstrate n'est pas instanciable
    abstract class Animals implements Affichable{
        protected $name;
        protected $age;
        // select $name or $age
        // click droit, Insert PHP8 Getter & Setter (extension vscode)

        public function __construct($nom, $age){
            $this->age = $age;
            $this->name = $nom;
        }
        // Samy ajoute ça pour mon test de Wolf
        public function capacity(){
        }


        public function getName(){
                return $this->name;
        }
        public function setName($name): self {
                $this->name = $name;
                return $this;
        }
        public function getAge(){
                return $this->age;
        }
        public function setAge($age): self {
                $this->age = $age;
                return $this;
        }
    

        public function renderAnimal(){
            echo '<div>
            <p>Je suis ' . $this->getName() . ', je suis âgé de ' . $this->getAge() . ' ans.</p>
            </div>';
        }

        // ci-dessous, abstract function, pour éviter des oublis des collègues
        abstract function nutrition();
    }

    
    class Dog extends Animals implements Affichable {  
        public function nutrition(){
            echo "Et je mange de la pâtée";
        }
        public function render(){
            echo '<p>Je suis un chien</p>';
            $this->renderAnimal();
        }
    }
    class Cat extends Animals implements Affichable {  
        public function nutrition(){
            echo "Et je mange des croquettes";
        }
        public function render(){
            echo '<p>Je suis un chat</p>';
            $this->renderAnimal();
        }
    }
    class Bird extends Animals implements Affichable {  
        public function nutrition(){
            echo "Et je mange des graines";
        }
        public function render(){
            echo '<p>Je suis un oiseau</p>';
            $this->renderAnimal();
        }
    }

    // Samy ajoute ça pour mon test de Wolf
    class Wolf extends Animals implements Affichable {
        public function nutrition(){
            echo "Et je mange des saucissons";
            echo "<br>";
        }
        public function render(){
            echo '<p>Je suis un loup</p>';
            $this->renderAnimal();
        }
        public function capacity(){
            echo "D'ailleurs, je suis capable de courir, aboyer, m'asseoir, étudier à l'école, faire la cuisine, faire le ménage, faire la vaisselle, danser, protéger mon maître,...";
            echo "<br>";
            echo "<br>";
        }
    }
?>