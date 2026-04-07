<?php


   /**
     * Alternative constructor for creating an instance with only a name is not possible in PHP, but we can use a static method to achieve a similar effect.
     * 
     * public function __construct($name)
     * {
     *  $this->name = $name;
     *  $this->age = 0; // Default age
     * }
     */


class MultipleConstructor
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        echo "Constructor called with name: $name and age: $age\n";
        $this->name = $name;
        $this->age = $age;
    }

    // Static method to create an instance with only a name
    public static function createWithName($name)
    {
        return new self($name, 0); // Default age is set to 0   
    }


    public function getName()
    {
        return $this->name;
    }

}