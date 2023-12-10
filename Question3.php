<?php

class Animal {
    protected $legs;

    public function __construct($legs) {
        $this->legs = $legs;
    }

    public function getLegs() {
        return $this->legs;
    }
}

class Chicken extends Animal {
    private $quantity;

    public function __construct($quantity) {
        parent::__construct(2); // Chickens have 2 legs
        $this->quantity = $quantity;
    }

    public function calculateLegs() {
        return $this->getLegs() * $this->quantity;
    }
}

class Cow extends Animal {
    private $quantity;

    public function __construct($quantity) {
        parent::__construct(4); // Cows have 4 legs
        $this->quantity = $quantity;
    }

    public function calculateLegs() {
        return $this->getLegs() * $this->quantity;
    }
}

class Pig extends Animal {
    private $quantity;

    public function __construct($quantity) {
        parent::__construct(4); // Pigs have 4 legs
        $this->quantity = $quantity;
    }

    public function calculateLegs() {
        return $this->getLegs() * $this->quantity;
    }
}

// Example usage
$chicken = new Chicken(10); // 10 chickens
$cow = new Cow(5); // 5 cows
$pig = new Pig(8); // 8 pigs

$totalLegs = $chicken->calculateLegs() + $cow->calculateLegs() + $pig->calculateLegs();

echo "Total number of legs on the farm: $totalLegs";

?>
