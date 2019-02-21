<?php namespace Sfp;
  require_once('Rotate.php');
  class Extend extends Rotate{
    public function extend(){
      $rotateArray = (parent::execute());
      return $rotateArray[count($rotateArray)-1];
    }
    function __construct($sA)
    {
      parent::__construct($sA);
    }
  }
 ?>
