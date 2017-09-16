<?php
namespace Matematika\Logika\Konjungsi;
use Matematika\Logika\Input\Input;

class Konjungsi{

  private $input;
  private $result;

  public function __construct(Input $input){
    $this->input = $input;
    $this->process();
  }

  private function process(){
    //array values mengubah dari string data yang di masukan menjadi numerik
    $no = 0;
    $soal = [];
    foreach ($this->input->Data as $key1 => $value1) {
      $data = array_values($value1);
      $loop = 0;
      foreach ($value1 as $key2 => $value2) {
        $soal[$loop] = $key2;
        $loop++;
      }
      $this->result[$no]['P'] = $soal[0];
      $this->result[$no]['Q'] = $soal[1];
      $this->result[$no]['Konjungsi'] = $this->kondisi($data[0],$data[1]);
      $soal = [];
      $no++;
    }
  }

  private function kondisi($p,$q){
    if ($p && $q) {
      return 'Benar';
    }else {
      return 'Salah';
    }
  }

  public function hasil(){
    return $this->result;
  }

}
