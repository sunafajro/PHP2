<?php
/* описание класса */
class A {
	/* публичный метод */
    public function foo() {
    	/* задаем статическую переменную, т.е. не зависящую от объекта  */
        static $x = 0;
        /* используем префиксную форму инкремента */
        echo ++$x;
    }
}
/* создаем первый объект */
$a1 = new A();
/* создаем второй объект */
$a2 = new A();
/* выполняем метод в первом объекте получаем 1 */
$a1->foo();
/* выполняем метод во втором объекте получаем 2 (т.к. переменная статична для класса) */
$a2->foo();
/* еще раз выполняем метод в первом объекте получаем 3 */
$a1->foo();
/* еще раз выполняем метод во втором объекте получаем 4 */
$a2->foo();