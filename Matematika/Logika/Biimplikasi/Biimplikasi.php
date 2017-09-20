<?php
namespace Matematika\Logika\Biimplikasi;
use Matematika\Logika\Input\Input;

class Biimplikasi{

  private $input;
  private $result;
  private $negasi;

  public function __construct(Input $input,$negasi = FALSE){
    $this->input = $input;
    $this->negasi = $negasi;
    $this->prosess();
  }

  private function prosess(){
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
      if ($this->negasi === FALSE) {
        $this->result[$no]['biimplikasi'] = $this->kondisi($data[0],$data[1]);
      }elseif ($this->negasi === TRUE) {
        $this->result[$no]['negasibiimplikasi'] = $this->negasi($this->kondisi($data[0],$data[1]));
      }

      $soal = [];
      $no++;
    }

  }

  private function kondisi($p,$q){
    if ($p === 1 && $q === 1) {
      return 'Benar';
    }elseif ($p === 1 && $q === 0) {
      return 'Salah';
    }elseif ($p === 0 && $q === 1) {
      return 'Salah';
    }elseif ($p === 0 && $q === 0) {
      return 'Benar';
    }
  }

  private function negasi($hasil){
    if ($hasil === 'Benar') {
      return 'Salah';
    }elseif ($hasil === 'Salah') {
      return 'Benar';
    }
  }


  public function hasil(){
    return $this->result;
  }

}
