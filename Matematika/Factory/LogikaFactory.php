<?php
namespace Matematika\Factory;

class LogikaFactory{
  private $input;
  private $negasiinput;
  public $contoh = [
    [
      'php itu bahasa pemrograman'=>'b',
      'ini bukan hp saya'=>'s'
    ],[
      'itu komputer saya'=>'s',
      'itu buku saya'=>'s'
    ]
  ];
  public function __construct($userInput){
    $this->input = new \Matematika\Logika\Input\Input($userInput);
    $this->negasiinput = new \Matematika\Logika\Negasi\Negasi($this->input);
    $this->negasiinput = $this->negasiinput->convert();
    //$this->negasiinput = new \Matematika\Logika\Negasi\Input\Input($this->negasiinput);
  }

  public function konjungsi(){
    return new \Matematika\Logika\Konjungsi\Konjungsi($this->input);
  }

  public function disjungsi(){
    return new \Matematika\Logika\Disjungsi\Disjungsi($this->input);
  }

  public function implikasi(){
    return new \Matematika\Logika\Implikasi\Implikasi($this->input);
  }

  public function biimplikasi(){
    return new \Matematika\Logika\Biimplikasi\Biimplikasi($this->input);
  }

  public function negasikonjungsi(){
    return new \Matematika\Logika\Konjungsi\Konjungsi($this->negasiinput,TRUE);
  }

  public function negasidisjungsi(){
    return new \Matematika\Logika\Disjungsi\Disjungsi($this->negasiinput,TRUE);
  }

  public function negasiimplikasi(){
    return new \Matematika\Logika\Implikasi\Implikasi($this->negasiinput,TRUE);
  }
  public function negasibiimplikasi(){
    return new \Matematika\Logika\Biimplikasi\Biimplikasi($this->negasiinput,TRUE);
  }


  /*

  [
    [
      '100 + 500 = 800'=>'s',
      '4 adalah faktor dari 12'=>'b'
    ],[
      'Pulau bali di kenal sebagi pulai dewata'=>'B',
      '625 adalah bilangan kuadrat'=>'B'
    ]
  ]
  */

}
