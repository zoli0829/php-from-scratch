<?php

abstract class Shape
{
    protected $name;

    //Abstract method
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    //Concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Cirlce extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Cirlce('Circle', 3);
var_dump($circle);
echo $circle->getName() . " " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle('Rectangle', 7, 10);
echo $rectangle->getName() . ' ' . $rectangle->calculateArea();
