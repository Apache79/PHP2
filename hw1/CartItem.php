<?php
//4. Придумать наследников класса из п.1. Чем они будут отличаться?
include "GoodsItem.php";

class CartItem extends GoodsItem {
    function __construct($id, $title, $category, $price) {
        parent::__construct($id, $title, $category, $price);
    }

    public function deletedGood() {
        echo"Товар ".$this->title." из категории ".$this->category." стоимостью ".
        $this->price." удален из корзины!";
    }  
}

$obj1 = new CartItem (1, "TV", "Бытовая электроника", 20);
$obj1->deletedGood();