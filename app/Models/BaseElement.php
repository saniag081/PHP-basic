<?php

class BaseElement{
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    //funciones con __ son metodos magicos
    public function __construct($title,$description){
        $this->setTitle($title);
        $this->description = $description;
    }

    //modificar
    public function setTitle($title){
        if($title == ''){
            $this->title = 'N/A';
        }else{
            $this->title = $title;
        }
    }

    //retornar valor
    public function getTitle(){
        return $this->title;
    }

    public function getDurationString() {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        if($years == 0){
            return "$extraMonths months";
        }else{
            if(!$extraMonths == 0){
                return "$years years $extraMonths months";		  
            }
            return "$years years";		  
        }
    }
}
