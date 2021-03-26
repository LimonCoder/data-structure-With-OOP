<?php

class queue {
    public $capactiy = 0;
    public $front = 0;
    public $rear = -1;
    public $numbers = [];
    public $total_items = 0;

    public function __construct($capactiy = 5)
    {
        $this->capactiy = 5;
    }


    private function isFull(){
        if ($this->total_items == $this->capactiy){
            return true;
        }
        return false;
    }

    private function isEmpty(){
        if ($this->total_items == 0){
            return true;
        }
        return false;
    }

    public function enqueue($values){

        if ($this->isFull()){
            echo "queue is full";
        }else{
            $this->rear =  ($this->rear + 1) % $this->capactiy ;
            $this->numbers[$this->rear] = $values;
            $this->total_items++;
        }

    }

    public function dequeue(){
        if ($this->isEmpty()){
            echo "queue is empty";
        }else{
            $front_item = $this->numbers[$this->front];
            $this->numbers[$this->front] = -1;
            $this->front = ($this->front +1) % $this->capactiy;
            $this->total_items--;
        }
    }

    public function print_queue(){
        for ($i = 0; $i<count($this->numbers);$i++){
            echo $this->numbers[$i]." ";
        }
        echo "<br>";
    }




}

$obj = new queue();

$obj->enqueue(5);
$obj->enqueue(6);
$obj->enqueue(7);
$obj->enqueue(8);
$obj->enqueue(9);

$obj->dequeue();

$obj->enqueue(10);


echo "<pre>";
print_r($obj);


