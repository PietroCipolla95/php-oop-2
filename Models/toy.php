<?php

class Toy extends Product
{
    public $material;

    public function __construct($name, $image, $price, $category, $animal, $material)
    {

        parent::__construct($name, $image, $price, $category, $animal);
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->animal = $animal;
        $this->material = $material;
    }

    public function getInfos()
    {
        return 'Material:' . $this->material;
    }
}
