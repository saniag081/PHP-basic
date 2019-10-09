<?php

class Job{
    private $title;
    public $description;
    public $visible;
    public $months;

    //modificar
    public function setTitle($title){
        $this->title = $title;
    }

    //retornar valor
    public function getTitle(){
        return $this->title;
    }
}

$jobs1 = new Job();
$jobs1 -> setTitle('PHP Developer');
$jobs1 -> description =  'This is an awesome job!!!';
$jobs1 -> visible = true;
$jobs1 -> months = 16;

$jobs2 = new Job();
$jobs2 -> setTitle('Python Developer');
$jobs2 -> description =  'This is an awesome job!!!';
$jobs2 -> visible = true;
$jobs2 -> months = 16;


$jobs = [
     $jobs1,
     $jobs2
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

  function getDuration($months) {
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    if($years == 0){
        return "$extraMonths months";
    }else{
        if(!$extraMonths == 0){
            return "$years years $extraMonths months";		  
        }
        return "$years years";		  
    }
  }
  function printJob($job) {
    if($job->visible == false) {
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->description . '</p>';
    echo '<p>' . getDuration($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
