<?php

require_once __DIR__ . '/../Trait/data.php';

class Product
{

    use Data;

    public $name;
    public $image;
    public $price;
    public $category;
    public $animal;

    public function __construct($name, $image, $price, $category, AnimalCategory $animal)
    {

        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->animal = $animal;
    }
}
