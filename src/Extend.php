<?php namespace Sfp;
  require_once './Rotate.php';
  class Extend extends Rotate {
    public function execute($amount){
      $rotated = Rotate::execute($amount);
      return end($rotated);
    }
  }

//Debugging
$extend = new Extend();
print_r($extend->execute("3"));
 ?>
