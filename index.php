<?php

class Box {
    public $length;
    public $width;
    public $height;
    public $isOpen;
    public $hasBeenOpened = false;

    public function open () {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }

    public function close () {
        $this->isOpen = false;
    }

    public function volume() {
        return $this->length * $this->width * $this->height;
    }

}

$box1 = new Box();
$box1->width = 10;
$box1->height = 20;
$box1->length = 30;
$box1->open();
var_dump($box2);
var_dump($box2->volume());
var_dump($box1);