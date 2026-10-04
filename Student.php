<?php

// Class student

class Student {
  private $name;
  private $grade;

  public function __construct($name, $grade) {
    $this->name = $name;
    $this->grade = $grade;
    
  }
}