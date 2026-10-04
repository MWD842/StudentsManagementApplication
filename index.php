<?php

// Code to execute the main function (entry point)

require 'StudentManager.php';

$student_manager = new StudentManager();

$student_manager->addStudent("Mowadah",88);
$student_manager->removeStudent("Mowadah");
$student_manager->displayStudents();

////////////////////////////////////////////////////////////////////////

// while (true) {
//   echo "\nMenu\n";
//   echo "1. Display students\n";
//   echo "2. Add new student\n";
//   echo "3. Remove a student\n";
//   echo "4. Exit\n";
//   echo "Choose an option: ";

//   $choice = fgets(STDIN);
//   if ($choice === false) {
//     break;
//   }

//   switch (trim($choice)) {
//     case '1':
//       $student_manager->displayStudents();
//       break;

//     case '2':
//       echo "Enter student name: ";
//       $name = fgets(STDIN);
//       if ($name === false) {
//         break 2;
//       }
//       $name = trim($name);

//       if ($name === '') {
//         echo "Student name cannot be empty.\n";
//         break;
//       }

//       echo "Enter grade (0-100): ";
//       $grade_input = fgets(STDIN);
//       if ($grade_input === false) {
//         break 2;
//       }

//       $grade = filter_var(trim($grade_input), FILTER_VALIDATE_INT);
//       if ($grade === false) {
//         echo "Invalid grade. Enter a whole number between 0 and 100.\n";
//         break;
//       }

//       $student_manager->addStudent($name, $grade);
//       break;

//     case '3':
//       echo "Enter student name to remove: ";
//       $name = fgets(STDIN);
//       if ($name === false) {
//         break 2;
//       }
//       $student_manager->removeStudent(trim($name));
//       break;

//     case '4':
//       exit("Goodbye!\n");

//     default:
//       echo "Invalid option. Choose 1, 2, 3, or 4.\n";
//   }
// }
