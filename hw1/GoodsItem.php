<?php

/*1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
2. Описать свойства класса из п.1 (состояние).
3. Описать поведение класса из п.1 (методы).*/

class GoodsItem{
    private $id;
    private $title;
    private $category;
    private $price;

    public function buyGood() {
        echo"Товар ".$this->title." из категории ".$this->category." стоимостью ".
        $this->price." добавлен в корзину!";
    }

    function __construct($id, $title, $category, $price) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->price = $price;						
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getPrice() {
        return $this->price;
    }
}

$obj = new GoodsItem (1, "TV", "Бытовая электроника", 20);
$obj->buyGood();