<?php
class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    //array("color" => "white")
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo "\herbie: Properties<br>";
print_vars($herbie);