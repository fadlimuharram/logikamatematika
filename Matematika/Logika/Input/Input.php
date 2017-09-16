<?php
namespace Matematika\Logika\Input;

class Input{

  public $RawData = [];


  private $kondisi = [
    's'=>0,
    'S'=>0,
     0 =>0,
    'b'=>1,
    'B'=>1,
     1 =>1
  ];

  public $Data = [];

  public function __construct($otherdata){
    if ($otherdata == null) {
      $this->cocokan();
    }else {
      $this->RawData = $otherdata;
      $this->cocokan();
    }

  }

  private function cocokan(){
    foreach ($this->RawData as $key1 => $value1) {
      foreach ($value1 as $key2 => $value2) {
        $this->Data[$key1][$key2] = $this->CheckKey($value2);
      }
    }
  }

  private function CheckKey($val){
    foreach ($this->kondisi as $key => $value) {
      if ($val === $key) {
        return $value;
      }
    }
  }





}
