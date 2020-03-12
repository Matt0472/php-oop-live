<?php 
  require_once 'Dipendente.php';

  class Programmatore extends Dipendente 
  {
    // tipo di linguaggio, livello, calcolo dello stipendio
    protected $tipoLinguaggio;
    protected $livello;
    protected $bonus;

    public function setLivello($_livello)
    {
      $this->livello = $_livello;
      $this->calcBonus($this->livello);
    }


    private function calcBonus($_livello)
    {
      if ($_livello == 'senior') {
        $this->bonus = 5;
      }elseif ($_livello == 'middle') {
        $this->bonus = 3;
      }elseif ($_livello == 'junior') {
        $this->bonus = 1.5;
      }
    }

    public function calcStipendio($_gg, $_prezzoBase)
    {
      $this->stipendio = $_gg * $_prezzoBase * $this->bonus;
    }
  }

  $programmatore_1 = new Programmatore('mattia', 'pedone','33333333');
  $programmatore_1->setLivello('junior');
  $programmatore_1->calcStipendio(16, 20);
  var_dump($programmatore_1->getStipendio());
?>