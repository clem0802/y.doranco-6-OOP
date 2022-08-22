<?php 
include_once '../classes/Affichable.php';

    abstract class Coffee implements Affichable {
        // propriétés
        protected $flavor;
        protected $liquid;

        // le constructeur
        public function __construct($sucre, $eau){
            $this->flavor = $sucre;
            $this->liquid = $eau;
        }

        public function fashion(){}



        
        // GETTERS (récupérer la valeur des attributs)
        // SETTERS (modifier la valeur des attributs)
        public function getFlavor(){
            return $this->flavor;
        }
        public function setFlavor($flavor): self {
            $this->flavor = $flavor;
            return $this;
        }

        public function getLiquid(){
            return $this->liquid;
        }
        public function setLiquid($liquid): self{
            $this->liquid = $liquid;
            return $this;
        }

        // RENDER method
        public function renderCoffee(){
            echo '<div>
            <p>Je suis un nouveau type de café et je contiens ' . $this->getFlavor() . ' et ' . $this->getLiquid() . '</p>
            </div>';
        }
        abstract public function nutrition();
    }


    class Saltoffee extends Coffee{
        public function nutrition(){
            echo "Je contiens du sucre et de l'eau";
            echo "<br>";
        }
        public function fashion(){
            echo "Je contiens également du sel et du poivre.";
        }
        public function render(){
            echo '<p>Je suis un nouveau type de café.</p>';
            $this->renderCoffee();
        }
        public function getNAme(){
            echo '<p>Mon nom est Saltoffee</p>';
            $this->renderCoffee();
        }
    }
?>