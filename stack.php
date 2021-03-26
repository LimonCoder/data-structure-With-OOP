<?php

class stack
{

    public $size;
    public $names = [];
    public  $point = -1;

    public function __construct($size = 5)
    {
        $this->size = $size;
    }

    // push value into array
    public function push($name){
        $this->point += 1;

        if ($this->point < $this->size){
            $this->names[$this->point] = $name;
        }else{
            echo "<span style='color: red' >Array Empty</span>";
        }
    }

    public function peek(){

        if ($this->point > -1){
            return $this->names[$this->point];
        }else{
            return -1;
        }
    }

    public function pop(){
        if ($this->point > -1){
            array_pop($this->names);
            $this->point -= 1;
        }else{
            echo "array is empty<br>";
        }
    }
}

$obj = new stack();

$obj->push('limon');
$obj->push('ahad');
$obj->push('nobel');
$obj->push('Korim');
$obj->push('Sorif');



$obj->pop();
echo "<br>";
echo "<pre>";
print_r($obj);




?>