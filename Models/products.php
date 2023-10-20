<?php

class Product
{
    public $name;
    public $image;
    public $price;
    public $category;
    public $animal;

    public function __construct($name, $image, $price, $category, $animal)
    {

        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->animal = $animal;
    }
}
