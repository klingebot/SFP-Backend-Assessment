<?php namespace Sfp;
  class Rotate{
    public function execute($amount){
      // Pull in JSON data from file.
      $rotateArray = json_decode(file_get_contents('../assets/rotate.json'), true);

      //Loop through inputted amount of times
      for ($x = 0; $x < $amount; $x++){
        //Remove and save first element in array (left shift)
        $removed = array_shift($rotateArray);

        //Add element to end of array
        array_push($rotateArray, $removed);

      }
      //End of loop, return array
      return $rotateArray;
    }
  }

//Test
$rotation = new Rotate();
print_r($rotation->execute("3"));
 ?>
