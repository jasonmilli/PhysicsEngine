<?php

class Thrown {
    private $initial_x;
    private $initial_y;
    private $accelaration;
    private $initial_speed;
    
    public function __construct(
        $initial_x,
        $initial_y,
        $accelaration,
        $initial_speed
    ) {
        $this->initial_x = $initial_x;
        $this->initial_y = $initial_y;
        $this->accelaration = $accelaration;
        $this->initial_speed = $initial_speed;
    }
    
    public function getPosition($time) {
        return array(
            'x' => $this->initial_x,
            'y' =>
                $this->initial_y
                + $time * $this->initial_speed
                - $time * $time * $this->accelaration
        );
    }
}