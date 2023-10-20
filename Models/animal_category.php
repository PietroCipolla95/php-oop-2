<?php

class AnimalCategory
{
    public $animal_category;
    public function __construct($animal_category)
    {
        $this->animal_category = $animal_category;
    }

    public function getIcon()
    {

        if ($this->animal_category === 'cani') {
            return '<i class="fa-solid fa-dog fa-flip-horizontal fa-2xl"></i>';
        } else {
            return '<i class="fa-solid fa-cat fa-flip-horizontal fa-2xl"></i>';
        }
    }
}
