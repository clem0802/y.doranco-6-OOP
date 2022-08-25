<?php
include_once '../classes/Affichable.php';
abstract class Animals implements Affichable {
	protected $name;
	protected $age;

	public function __construct($nom, $age) {
		$this->age = $age;
		$this->name = $nom;
	}

	public function getName() {
		return $this->name;
	}
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	public function getAge() {
		return $this->age;
	}
	public function setAge($age): self {
		$this->age = $age;

		return $this;
	}

	public function renderAnimal() {
		echo '<div>
            <p>Je suis ' . $this->getName() . ', je suis agé de ' . $this->getAge() . '</p>
        </div>';
	}

	abstract public function nutrition();
}


class Dog extends Animals {
	public function nutrition() {
		echo "Je mange de la patée!";
	}
	public function render() {
		echo '<p>Je suis une chien</p>';
		$this->renderAnimal();
	}
}

class Cat extends Animals {
	public function nutrition() {
		echo "Je mange des croquettes!";
	}
	public function render() {
		echo '<p>Je suis une chat</p>';
		$this->renderAnimal();
	}
}

class Bird extends Animals {
	public function nutrition() {
		echo 'Je mange des graines';
	}

	public function render() {
		echo '<p>Je suis un oiseau</p>';
		$this->renderAnimal();
	}
}

class Wolf extends Animals {
	public function nutrition() {
		echo 'Je mange de la viande';
	}
	public function capacity() {
		echo "Je court";
	}
	public function render() {
		echo '<p>Je suis un loup</p>';
		$this->renderAnimal();
	}
}

class Lion extends Animals {
	public function render() {
		echo '<p>Je suis un lion</p>';
		$this->renderAnimal();
	}
	public function nutrition() {
		echo 'Je mange de la viande';
	}
}