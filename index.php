<?php

interface CarInterface
{
    public function goAhead(); // движение вперед
    public function goBack(); // движение назад
}

abstract class Car implements CarInterface
{
    public function goAhead() {}
    public function goBack() {}
    abstract public function super(); // полиморфная супер способность
    
    public function goldCaterpillar() {} // золотая гусеница
    public function signal() {} // сигнал
    public function wipers() {} // дворники
    public function leatherInterior() {} // кожаный салон
}

class Tank extends Car
{
    public function super() {} // выстрел с пушки
}

class Auto extends Car
{
    public function super() {} // закись азота
}

class Buldozer extends Car
{
    public function super() {} // управление ковшом
}

/* ################################ */

function carFunc($class)
{
    echo $class->goAhead();
    echo $class->goBack();
    echo $class->super();

    if (get_class($class) === 'Tank') echo $class->goldCaterpillar();

    if (get_class($class) === 'Auto')
    {
        echo $class->signal();
        echo $class->wipers();
    }
    
    if (get_class($class) === 'Buldozer') echo $class->leatherInterior();
}

$tank = new Tank;
$auto = new Auto;
$buldozer = new Buldozer;

carFunc($tank);
carFunc($auto);
carFunc($buldozer);
