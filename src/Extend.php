<?php namespace Sfp;
  // Import Rotate file/class
  require_once './Rotate.php';

  class Extend extends Rotate {
    /**
     * Returns the last value from an executed Rotate parent function
     * 
     * @param  integer $amount Number of times to rotate array (left)
     * @return string         Last item in rotated array
     *
     */
    public function execute($amount){
      //Execute parent function and store returned array in $rotated
      $rotated = Rotate::execute($amount);

      //Get last item in array and return as string
      return end($rotated);
    }
  }
 ?>
