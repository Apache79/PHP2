<?php

abstract class AbstractGoods{
    private $price;
    private $title;
    private $quantity;
    function __construct($title, $quantity, $price) {
        $this->title = $title;
        $this->quantity = $quantity;
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    } 
    public function getTitle() {
        return $this->title;
    } 
    public function getQuantity() {
        return $this->quantity;
    }

    protected abstract function getTotalPrice();
    protected abstract function getSum();

}

class DigitalGoods extends AbstractGoods {
    function __construct($title, $quantity, $price){
        parent::__construct($title, $quantity, $price);
    }
    public function getTotalPrice() {
        return $this->getPrice() / 2;
    } 
    public function getSum() {
        //echo $this->getTotalPrice();
        return $this->getTotalPrice() * $this->getQuantity();
    } 
}


class PiecesGoods extends AbstractGoods {

    function __construct($title, $quantity, $price){
        parent::__construct($title, $quantity, $price);
    }
    public function getTotalPrice() {
        return $this->getPrice();
    } 
    public function getSum() {
        //echo $this->getTotalPrice();
        return $this->getTotalPrice() * $this->getQuantity();
    } 

}

class ByWeightGoods extends AbstractGoods {

    function __construct($title, $quantity, $price){
        parent::__construct($title, $quantity, $price);
    }

    public function getTotalPrice() {
        if($this->getQuantity() >= 5) {
            return $this->getPrice() - 10;
        } else {
            return $this->getPrice() + 10;
        }  
    } 
    public function getSum() {
        //echo $this->getTotalPrice();
        return $this->getTotalPrice() * $this->getQuantity();
    } 
}

$obj1 = new DigitalGoods('course', 6, 100);
$obj1->getSum();
$obj2 = new PiecesGoods('box', 2, 10);
$obj2->getSum();
$obj3 = new ByWeightGoods('rise', 8, 30);
$obj3->getSum();