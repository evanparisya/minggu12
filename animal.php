<?php
class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    // Meskipun kita tidak bisa mengakses langsung dari luar kelas,
    // kita bisa membuat metode untuk mengambil nilai $color
    public function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
?>