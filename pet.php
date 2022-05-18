<?php

class Pet{
    private $_name;
    private $_color;

    function eat(){
        echo $this->_name . " is eating. <br>";
    }

    // default constructor
    function __construct(){
        $this->_name = "unknown";
        $this->_color = "pink";
    }

    // parameterized constructor with default values
//    function __construct($name = "unknown", $color = "?"){
//        $this->_name = $name;
//        $this->_color = $color;
//    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->_name = $name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->_color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->_color = $color;
    }



}