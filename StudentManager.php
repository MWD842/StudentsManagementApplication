<?php

// Class manage students

require 'Student.php';


class StudentManager {
  private $student = [];

  public function addStudent(string $name, int $grade){
    if ($grade > 100 || $grade < 0) {
      echo "Invalid grade. Grade must be between 0 and 100.\n";
      return;
    }
    $this->student[$name] = new Student($name, $grade);
  }

  public function removeStudent($name){
    if (isset($this->student[$name])) {
      unset($this->student[$name]);
    } else {
      echo "Student name \"{$name}\" doesn't exist\n";
    }
  }

  public function displayStudents(){
    if (empty($this->student)) {
      echo "No students found\n";
    } 
    else {
      foreach($this->student as $student){
        echo 'Student: ' . $student->getName() . " | Grade: " . $student->getGrade() . "\n";
      }
    }
  }

}
