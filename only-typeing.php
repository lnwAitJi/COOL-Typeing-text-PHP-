<?php
function type($input01) {
  $string = $input01;
  $c = strlen($string);
  for ($i = 0; $i < $c; $i++) {
    echo($string[$i]);
    usleep(random_int(0, 123456));   /** <--- Chang Time */
  }
  echo("\n");
}

$name = "AitJi";
type("Hello ".$name." Welcome To AitJi's Github!!"); # <--- TO use #