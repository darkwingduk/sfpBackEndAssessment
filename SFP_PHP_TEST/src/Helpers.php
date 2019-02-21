<?php
  namespace Sfp;
    class FileHelper{
      public function ReadFile($fileName){
        return fopen($fileName, 'r');
      }
      //thought this would be used in another class, but it wasn't. Didn't move it back.
      public function GetFileContents($fp)
      {
        $fileContents = [];
        while(($line = fgetcsv($fp)) !== FALSE)
        {
          array_push($fileContents, $line);
        }
        return $fileContents;
      }
    }
?>
