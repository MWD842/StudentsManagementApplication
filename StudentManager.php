<?php

// Class manage students

require 'Student.php';


class StudentManager {
  private $student = [];

  public function addStudent(string $name, int $grade){
    $this->student[$name] = new Student($name, $grade);
  }

  public function displayStudents(){
    if (empty($this->student)) {
      echo "No students found";
    } 
    else {
      foreach($this->student as $student){
        echo 'Student: ' . $student->getName() . 'Grade: ' . $student->getGrade() . '\t';
      }
    }
  }
}
