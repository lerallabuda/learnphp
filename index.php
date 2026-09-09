<?php
 
class Box {
    public $width;
    private $height;
    protected $length;
    public bool $isOpen = false;
    public bool $hasBeenOpened = false;
 
    public function open() {
        $this->isOpen = true;
        $this->hasBeenOpen = true;
    }
 
    public function close() {
        $this->isOpen = false;
    }
 
    public function volume() {
        return $this->height * $this->length * $this->width;
    }
 
    public function test(){
        var_dump($this->length);
    }
 
    public function setHeight($height) {
        if($height > 0) {
            $this->height = $height;
        }
    }
 
    public function getHeight($height) {
            return $this->height;
        }
}  
 
class MetalBox extends Box{
    public $weight;
 
    public function mass(){
        return $this->volume() * $this->weight;
    }    
    public function test2() {
        var_dump($this->height);
    }
}
 
$metal1 = new MetalBox()
$metal1->height();
var_dump($metal1);
 