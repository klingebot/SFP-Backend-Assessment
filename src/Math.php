<?php namespace Sfp;
  class Math {
    public function execute(){
      //Preliminary variables
      //
      // count: # of valid entries found
      // total: running total from valid entries
      //
      $count = 0;
      $total = 0;

      //Pull in and format csv file
      $csv = array_map('str_getcsv', file('../assets/tabular.csv'));

      //Start at 1 to skip over csv formatting key,value,accept
      for($x = 1; $x < count($csv); $x++){
        if($csv[$x][2] == "true"){
          $count++;
          $total += $csv[$x][1];
        }
      }

      //Account for empty csv file/no valid entries (non-applicable)
      if($count != 0){
        return $total/$count;
      }else{
        return "Empty file or no valid entries found.";
      }
    }
  }

//Debugging
$mathStuff = new Math();
print_r($mathStuff->execute());
 ?>
