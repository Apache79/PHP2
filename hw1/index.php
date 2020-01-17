<?php

//5. Дан код:

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

//Что он выведет на каждом шаге? Почему?
//1234
/*Статическая переменная принадлежит классу и не удаляется после завершения работы этой функции.
Значение функции сохраняется от вызова к вызову*/

echo "<hr>";
//Немного изменим п.5:


class C {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class D extends C {
}
$c1 = new C();
$d1 = new D();
$c1->foo(); 
$d1->foo(); 
$c1->foo(); 
$d1->foo();
//6. Объясните результаты в этом случае.
//1122
/*Я думаю,что мы создаем новый экземпляр класса 
и функции в них запускаются независимо друг от друга.*/
