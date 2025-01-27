<?php
class Food {
    private $name;
    private $price;

    public function show_price(int $price){
        echo $this->price . "<br>";
    }

    public function __construct(string $name,int $price){
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function show_height(int $height){
        echo $this->height . "cm" . "<br>";
    }

    public function __construct(string $name,int $height,int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$genji_pie = new Food("源氏パイ",190);
print_r($genji_pie);

echo "<br>";

$duck = new Animal("あひる",50,1200);
print_r($duck);

echo "<br>";

$genji_pie->show_price(190);
$duck->show_height(50);


?>