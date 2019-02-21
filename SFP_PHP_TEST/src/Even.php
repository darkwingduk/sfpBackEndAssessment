<?php
  namespace Sfp;
  require_once('Helpers.php');
    class Even{
      public function execute(){
        $readFile = new FileHelper();
        $fp = $readFile->ReadFile('assets\numbers.csv');  
        $count = 0;
        while(($line = fgetcsv($fp)) !== FALSE){
          if($line[0] % 2 == 0)
          {
            $count += 1;
          }
        }
        return $count;
      }
    }
?>
