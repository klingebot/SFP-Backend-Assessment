<?php namespace Sfp;
  class Rotate{
    /**
     * Rotate an array to the left given a parameter amount
     * @param  integer $amount Number of times to rotate the array to the left
     * @return array         Rotated array given $amount of times
     */
    public function execute($amount){
      // Pull in JSON data from file.
      $rotateArray = json_decode(file_get_contents('../assets/rotate.json'), true);

      //Loop through inputted amount of times
      for ($x = 0; $x < $amount; $x++){
        //Remove and save first element in array (left rotation)
        $removed = array_shift($rotateArray);

        //Add element to end of array
        array_push($rotateArray, $removed);
      }
      return $rotateArray;
    }
  }
 ?>
