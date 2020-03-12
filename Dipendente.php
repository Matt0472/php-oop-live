<?php 

  class Dipendente 
  {
    protected $nome;
    protected $cognome;
    protected $indirizzo;
    protected $cf;
    protected $ci;
    protected $mail;
    protected $telefono;
    protected $matricola;
    protected $titoloStudio;
    protected $stipendio;
    // protected $giorniLavorativi;
    
    public function __construct($_nome, $_cognome, $_matricola)
    {
      
      if (strlen($_nome) < 3 || preg_match('/^([^0-9]+)$/', $_nome) == 0) {
        throw new Exception('Non hai inserito il nome corretto');
      } else {
        $this->nome = $_nome;
      }

      if (strlen($_cognome) < 3 || preg_match('/^([^0-9]+)$/', $_cognome) == 0) {
        throw new Exception('Non hai inserito il cognome corretto');
      } else {
        $this->cognome = $_cognome;
      }


      
      $this->matricola = $_matricola;
    }

    public function setCf($_cf)
    {
      // fai un controllo sul dato
      $this->cf = $_cf;
    }

    public function getCf()
    {
      return $this->cf;
    }

    public function setCi($_ci)
    {
      // fai un controllo sul dato
      $this->ci = $_ci;
    }

    public function getCi()
    {
      return $this->ci;
    }

    public function setMail($_mail)
    {
      // fai un controllo sul dato
      $this->mail = $_mail;
    }

    public function getMail()
    {
      return $this->mail;
    }

    public function setTelefono($_telefono)
    {
      // fai un controllo sul dato
      $this->telefono = $_telefono;
    }

    public function getTelefono()
    {
      return $this->telefono;
    }

    public function setTitoloStudio($_titoloStudio)
    {
      // fai un controllo sul dato
      $this->titoloStudio = $_titoloStudio;
    }

    public function getTitoloStudio()
    {
      return $this->titoloStudio;
    }

    public function calcStipendio($_gg, $_prezzoBase)
    {
      $this->stipendio = $_gg * $_prezzoBase;
      
    }
    public function getStipendio()
    {
      return $this->stipendio;
    }
  }

  $dipendente_1 = new Dipendente('cccccc', 'dddddd', '333333');
  $dipendente_1->calcStipendio(24, 15);
  var_dump($dipendente_1->getStipendio());
?>