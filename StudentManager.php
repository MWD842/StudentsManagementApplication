<?php

// Class manage students

require 'Student.php';


class StudentManager {
  private $student = [];

  public function addStudent(string $name, int $grade){
    $this->student[$name] = new Student($name, $grade);
  }

  public function displayStudents(){
    foreach($this->student as $student){
      echo 'Student: ' . $student->getName() . 'Grade: ' . $student->getGrade() . '\t';
    }
  }
}