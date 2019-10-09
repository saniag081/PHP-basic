<?php

class Job{
    private $title;
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

$jobs1 = new Job('PHP Developer','This is an awesome job!!!');
$jobs1 -> months = 16;

$jobs2 = new Job('Python Developer','This is an awesome job!!!');
$jobs2 -> months = 16;

$jobs3 = new Job('Devops',  'This is an awesome job!!!');
$jobs3 -> months = 16;

$jobs = [
     $jobs1,
     $jobs2,
     $jobs3
//     [
//       'title' => 'PHP Developer',
//       'description' => 'This is an awesome job!!!',
//       'visible' => true,
//       'months' => 16
//     ],
//     [
//       'title' => 'Python Dev',
//       'visible' => false,
//       'months' => 14
//     ],
//     [
//       'title' => 'Devops',
//       'visible' => true,
//       'months' => 5
//     ],
//     [
//       'title' => 'Node Dev',
//       'visible' => true,
//       'months' => 24
//     ],
//     [
//       'title' => 'Frontend Dev',
//       'visible' => true,
//       'months' => 3
//     ]
];


  function printJob($job) {
    if($job->visible == false) {
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . $job->getDurationString($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
