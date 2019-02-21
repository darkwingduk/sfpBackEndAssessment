<?php
  namespace Sfp;
  require_once('Helpers.php');
  class Math{
    public function execute(){
      $readFile = new FileHelper();
      $fp = $readFile->ReadFile('assets\tabular.csv');
      $fileContents = $readFile->GetFileContents($fp);
      $fileContents = $this->getOnlyTrue($fileContents);
      print $this->getAverage($fileContents);
    }

    function getOnlyTrue($fileContents)
    {
      $fc = [];
      foreach($fileContents as &$value)
      {
        if($value[2] == 'true')
        {
          array_push($fc,$value);
        }
      }
      return $fc;
    }

    function getAverage($fileContents)
    {
      $total = 0;
      $average = 0;
      foreach($fileContents as &$value)
      {
        $total += $value[1];
      }
      $average = $total / count($fileContents);
      return $average;
    }
  }
 ?>
