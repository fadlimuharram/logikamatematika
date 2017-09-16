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

  public function __construct(NormalInput $normalinput){
    $this->normalinput = $normalinput;
  }

  public function convert(){
    $this->convertToNegasi = new NegasiInput($this->normalinput);
    $this->datanegasi = new $this->normalinput($this->convertToNegasi->getNegasi());
    return $this->datanegasi;
  }


}
 ?>
