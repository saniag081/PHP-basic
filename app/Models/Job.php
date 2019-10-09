<?php
namespace App\Models;

require_once 'BaseElement.php';

class Job extends BaseElement {
    public function __contruct($title,$description){
        parent::__construct($title,$description);
    }

    public function getDurationString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        if($years == 0){
                return "job $extraMonths months";
        }else{
            if(!$extraMonths == 0){
                return "job $years years $extraMonths months";		  
            }
        return "job $years years";		  
        }
    }
    

}
