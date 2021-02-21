<?php namespace Sfp;
  class Math {
    /**
     * From a given .csv file, find the average of all values whose value=TRUE
     *
     * @return Double Average amount of all values that are true in dataset
     *
     */
    public function execute(){
      /**
       * Variables to be used in averaging math
       *
       * @var integer $count Number of valid entries found in dataset matching params
       * @var integer $total Running total from valid entries
       *
       */
      $count = 0;
      $total = 0;

      //Pull in and format csv file
      $csv = array_map('str_getcsv', file('../assets/tabular.csv'));

      //Start at 1 to skip over csv formatting key,value,accept
      for($x = 1; $x < count($csv); $x++){

        //If valid entry is found, increase count by 1 and add amount to running total
        if($csv[$x][2] == "true"){
          $count++;
          $total += $csv[$x][1];
        }
      }

      //Account for empty csv file/no valid entries (non-applicable but good practice)
      if($count != 0){
        return $total/$count;
      }else{
        return "Empty file or no valid entries found.";
      }
    }
  }
 ?>
