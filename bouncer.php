<?php

class Bouncer {
    private $x;
    private $y;
    private $accelaration;
    private $bounce_efficiency;
    private $time = 0;
    private $speed = 0;
    
    public function __construct(
        $initial_x,
        $initial_y,
        $accelaration,
        $bounce_efficiency
    ) {
        $this->x = $initial_x;
        $this->y = $initial_y;
        $this->accelaration = $accelaration;
        $this->bounce_efficiency = $bounce_efficiency;
    }
    
    public function getPosition($time) {
    echo $time.'|';
        $y_position =
            $this->y
            + $this->speed * ($time - $this->time)
            - ($time - $this->time) * ($time - $this->time) * $this->accelaration;
            echo $y_position.'|';
        if ($y_position < 0) {
            $collision_speed = sqrt(
                - $this->speed * $this->speed
                + 2 * $this->accelaration * $this->y
            );
            echo $collision_speed.'|';
            $this->time += $this->y / ($collision_speed);
            echo $this->time.'|';
            $this->speed = $this->bounce_efficiency * $collision_speed;
            echo $this->speed.'|';
            $this->y = 0;
            $y_position = $this->speed * ($time - $this->time)
                - ($time - $this->time) * ($time - $this->time) * $this->accelaration;
                echo $y_position;
        }
        return array('x' => $this->x, 'y' => $y_position);
    }
}