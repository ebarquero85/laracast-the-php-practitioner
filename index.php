<?php

require('functions.php');


class Task{

    protected $completed = false;

    public $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('Estudiar programación'),
    new Task('Ir a trabajar'),
    new Task('Comprar comida')
];

$tasks[0]->complete();
$tasks[2]->complete();

require 'index.view.php';
