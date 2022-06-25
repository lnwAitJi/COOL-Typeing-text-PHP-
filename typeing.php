<?php
function readline($prompt = ""):string{if($prompt){if(is_array($prompt)){var_dump($prompt);}else {echo $prompt."";}}$fp = fopen("php://stdin","r");$line = rtrim(fgets($fp, 1024));if(empty($line)){return '';}return $line;}
# ^ don't forget to cpy this #
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

function enter($input02){
  readline("> Press Enter To Next <");
  //   $d = "";
  // for ($i=0; $i < 50; $i++) {
  //   $d.= "\n";
  // }
}
enter(""); # <--- TO use #
type("Cool u press Enter");

# Typeing + Enter #
function type_enter($input03){
  $string = $input03;
  $c = strlen($string);
  for ($i = 0; $i < $c; $i++) {
    echo($string[$i]);
    usleep(random_int(0, 123456));   /** <--- Chang Time */
  }
  echo("\n");
  readline("> Press Enter To Next <");
}
type_enter("OK OKAY Press agin");