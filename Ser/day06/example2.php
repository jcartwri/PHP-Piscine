<?php

class Person
{
    public $name;
    public $age;
    public $sex;

    /**
     * explicitly declare a constructor with parameters
     */
    public function __construct($name="", $sex="Male", $age=22)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    /**
     * say method
     */
    public function say()
    {
        echo "Name：" . $this->name . ",Sex：" . $this->sex . ",Age：" . $this->age;
    }
    public function __destruct()
    {
        echo "Well, my name is ".$this->name;
    }

}

$Person1 = new Person("Yasha", "Mail", "25");
echo $Person1->say();