<?php

class Kennel extends Product
{
    public $dimension;

    public function __construct($name, $image, $price, $category, $animal, $dimension)
    {

        parent::__construct($name, $image, $price, $category, $animal);
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->animal = $animal;
        $this->dimension = $dimension;
    }

    public function getInfos()
    {
        return 'Dimension: ' . $this->dimension;
    }
}
