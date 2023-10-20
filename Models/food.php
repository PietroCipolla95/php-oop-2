<?php

class Food extends Product
{
    public $weight;


    public function __construct($name, $image, $price, $category, $animal, $weight)
    {

        parent::__construct($name, $image, $price, $category, $animal);
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->animal = $animal;
        $this->weight = $weight;
    }


    public function getInfos($weight)
    {
        $this->weight = $weight . 'g';
    }
}
