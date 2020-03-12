<?php 
  require_once 'Dipendente.php';
  require_once 'trait/BuoniBenzina.php';


  class Amministrativo extends Dipendente 
  {
    use BuoniBenzina;
    protected $ruolo;
    protected $buoniPasto;
    protected $giorniLavorativi;
    protected $valoreBuono;

    public function __construct($_nome, $_cognome, $_matricola, $_titoloStudio)
    {
      parent::__construct($_nome, $_cognome, $_matricola);
      $this->titoloStudio = $_titoloStudio;
    }

    public function setRuolo($_ruolo)
    {
      $this->ruolo = $_ruolo;
    }

    public function getRuolo()
    {
      return $this->ruolo;
    }

    public function calcStipendio($_giorniLavorativi, $_prezzoBase)
    {
      parent::calcStipendio($_giorniLavorativi, $_prezzoBase);
      $this->giorniLavorativi = $_giorniLavorativi;
      $this->valoreBuono = $this->stipendio / 100 * 0.5;
    }
    public function calcBuoniPasto()
    {
      $this->buoniPasto = $this->giorniLavorativi  * $this->valoreBuono;
    }
    public function getBuonipasto()
    {
      return $this->buoniPasto;
    }
  }

  $amministrativo_1 = new Amministrativo('ggggggg', 'eeeeeee', '555555','terza media');
  $amministrativo_1->calcStipendio(23, 40);
  $amministrativo_1->calcBuoniPasto();
  // var_dump($amministrativo_1->getBuoniPasto());
  $amministrativo_1->setDistanzaKm(16);
  echo 'Km percorsi ' . $amministrativo_1->getDistanzaKm();
  $amministrativo_1->setCostoLtCarburante(1.5);
  echo 'Costo carburante ' . $amministrativo_1->getCostoLtCarburante();
  echo 'Calcolo buoni ' . $amministrativo_1->calcBuoniBenzina();
  // var_dump($amministrativo_1);
?>