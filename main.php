<?php
  /* This program uses recursion to find the factorial of a number
   * By Venika Sem
   * @version 1.0
   * @since Feb-2024
   */
  
  // find factorial of a number using recursion
  function factorial($num) {
      if ($num == 0) {
          return 1;
      } else {
          return $num * factorial($num - 1);
      }
  }
  
  // get user input
  echo "Enter a number to find the factorial of: ";
  $inputNumber = intval(trim(fgets(STDIN)));
  
  if ($inputNumber < 0) {
      echo "\n-1";
  } else {
      echo "\n" . factorial($inputNumber);
  }
  
  echo "\nDone.";
?>
