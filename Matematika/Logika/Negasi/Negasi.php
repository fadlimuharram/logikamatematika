<?php
/*
script ini berfungsi mengubah input menjadi negasi
*/
namespace Matematika\Logika\Negasi;
use \Matematika\Logika\Input\Input as NormalInput;
use Matematika\Logika\Negasi\Input\Input as NegasiInput;

class Negasi{

  private $datanegasi;
  private $convertToNegasi;
  private $normalinput;
  private $result;

  public function __construct(NormalInput $normalinput){
    $this->normalinput = $normalinput;
  }

  public function convert(){
    $this->convertToNegasi = new NegasiInput($this->normalinput);
    $this->datanegasi = new $this->normalinput($this->convertToNegasi->getNegasi());
    return $this->datanegasi;
  }


  //mengubah to negasi
  public function process(){
    $no = 0;
    $soal = [];
    foreach ($this->datanegasi->Data as $key1 => $value1) {
      $data = array_values($value1);
      $loop = 0;
      foreach ($value1 as $key2 => $value2) {
        $soal[$loop] = $key2;
        $neg[$loop] = $value2;
        $loop++;
      }
      $this->result[$no]['P'] = $soal[0];
      $this->result[$no]['Q'] = $soal[1];
      $this->result[$no]['~P'] = $neg[0];
      $this->result[$no]['~Q'] = $neg[1];

      $soal = [];
      $neg = [];
      $no++;
    }

  }

  public function gethasil(){
    $this->convert();
    $this->process();
    return $this->result;
  }





}
 ?>
