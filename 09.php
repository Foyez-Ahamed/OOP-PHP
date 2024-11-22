<!-- interfaces -->

<?php

interface BaseAnimal
{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class Animal implements BaseAnimal
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }
}

interface BaseHuman extends BaseAnimal
{
    function canTalk();
}

class Human implements BaseHuman
{
    function isAlive()
    {
    }
    function canEat($param1, $param2)
    {
    }
    function breed()
    {
    }

    function canTalk()
    {
    }
}

$h = new Human();

echo $h instanceof BaseAnimal;

// Note: Eikhane bujar bisoy holo Human eki shate BaseAnimal and eki shate BaseHuman OOP er concept e eita polymorphism orthat ekta object kivabe multiple interface ke represent korte pare , poriborthon korte pare er shate se notun notun method o add korte pare //