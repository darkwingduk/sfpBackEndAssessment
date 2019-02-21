<?php namespace Sfp;
  class Rotate{
    public $shiftAmount = 0;
    function __construct($sA){
      $this->shiftAmount = $sA;
    }
    public function execute(){
      $fileContents = file_get_contents('assets\rotate.json');
      $j = json_decode($fileContents, true);
      for($i = 0; $i < $this->shiftAmount; $i++)
      {
        array_push($j, array_shift($j));
      }
      return $j;
    }
  }
 ?>
