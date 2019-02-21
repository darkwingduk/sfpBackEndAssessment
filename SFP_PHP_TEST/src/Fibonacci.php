<?php
  namespace Sfp;
  require_once('Helpers.php');
    class Fibonacci{
        public function execute(){
          $fibonacciArray = array(0);
          $y = 1;
          for($i = 0; $i < 9; $i++)
          {
            $z = $fibonacciArray[$i] + $y;
            $y = $fibonacciArray[$i];

            //fv = FileValue
            $fv = $this->CheckFile($z);
            if($fv != 0)
            {
              array_push($fibonacciArray,$fv);
            }
            else{
              array_push($fibonacciArray,$z);
            }
          }
          return $fibonacciArray;
        }

        function CheckFile($x){
          $readFile = new ReadFileHelper();
          $fp = $readFile->ReadFile('assets\fibonacci.csv');
          while(($line = fgetcsv($fp)) !== FALSE){
            if($line[0] == $x)
            {
              return $line[0];
            }
          }
          return 0;
        }
    }  
 ?>
