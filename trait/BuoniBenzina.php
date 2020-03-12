<?php 

  trait BuoniBenzina 
  {
    public $distanzaKm;
    public $costoLtCarburante;

    public function calcBuoniBenzina()
    {
      return $this->distanzaKm * $this->costoLtCarburante;
    }
    
    public function setDistanzaKm($_distanzaKm)
    {
      $this->distanzaKm = $_distanzaKm;
    }
    public function getDistanzaKm()
    {
      return $this->distanzaKm;
    }

    public function setCostoLtCarburante($_costoLtCarburante)
    {
      $this->costoLtCarburante = $_costoLtCarburante;
    }
    public function getCostoLtCarburante()
    {
      return $this->costoLtCarburante;
    }
  }

?>