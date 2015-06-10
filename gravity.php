<?php

class Gravity {
    private $initial_x;
    private $initial_y;
    private $accelaration;
    
    public function __construct($initial_x, $initial_y, $accelaration) {
        $this->initial_x = $initial_x;
        $this->initial_y = $initial_y;
        $this->accelaration = $accelaration;
    }
    
    public function getPosition($time) {
        return array(
            'x' => $this->initial_x,
            'y' => $this->initial_y- $time * $time * $this->accelaration,
        );
    }
}