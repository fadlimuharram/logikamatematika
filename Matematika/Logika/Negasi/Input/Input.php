<?php
/*
script ini berfungsi mengubah input menjadi negasi
*/
namespace Matematika\Logika\Negasi\Input;
use \Matematika\Logika\Input\Input as NormalInput;

class Input{

  private $NormalInput;
  private $negasi;

  public function __construct(NormalInput $input){
    $this->NormalInput = $input;
  }

  private function process(){
    foreach ($this->NormalInput->Data as $key1 => $value1) {
      foreach ($value1 as $key2 => $value2) {
        $this->negasi[$key1][$key2] = $value2;
        if ($this->negasi[$key1][$key2] == 1) {
          $this->negasi[$key1][$key2] = 0;
        }elseif ($this->negasi[$key1][$key2] == 0) {
          $this->negasi[$key1][$key2] = 1;
        }
      }
    }
  }

  public function getNegasi(){
    $this->process();
    return $this->negasi;
  }

}
 ?>
