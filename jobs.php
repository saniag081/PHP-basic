<?php

    require 'app/Models/Job.php';
    require 'app/Models/Project.php';
    require_once 'app/Models/Printable.php';

$jobs1 = new Job('PHP Developer','This is an awesome job!!!');
$jobs1 -> months = 16;

$jobs2 = new Job('Python Developer','This is an awesome job!!!');
$jobs2 -> months = 16;

$jobs3 = new Job('Devops',  'This is an awesome job!!!');
$jobs3 -> months = 16;

$project1 = new Project('Proyecto 1','description 1');

$jobs = [
     $jobs1,
     $jobs2,
     $jobs3
];

$projects = [
    $project1
];

  function printElement(Printable $job) {
    if($job->visible == false) {
      return;
    }
    echo '<li class="work-position">';
    echo '<h5>' . $job->getTitle() . '</h5>';
    echo '<p>' . $job->getDescription() . '</p>';
    echo '<p>' . $job->getDurationString($job->months) . '</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }
