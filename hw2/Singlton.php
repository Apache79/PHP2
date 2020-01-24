<?php

trait Insert {
	public function insert() {
		//Добавление
	}
}

trait Update {
	public function update() {
		//Обновление
	}
}

class DB{

    use Insert;
    use Update;

    static $db;
    private function __construct(){
        //Коннект к базе данных
    }
    
    static function getObject(){
        if(self::$db==null){
            self::$db = new DB;
        }
        return self::$db;
    }
}

class Test{
    private $obj;
    
    function __construct(){
        $this->obj = DB::getObject();//создали объект DB
    }
    function addGoods(){
        $goods = $this->obj->insert();
    }
    function updateGoods(){
        $goods = $this->obj->update();
    }
}