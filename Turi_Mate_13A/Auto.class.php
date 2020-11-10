<?php
class Auto{
    public $nev;
    public $evjarat;
    public $ajtoszam;
    public $szin;

    public function __construct($nev,$evjarat,$ajtoszam,$szin){
        $this->nev=$nev;
        $this->evjarat=$evjarat;
        $this->ajtoszam=$ajtoszam;
        $this->szin=$szin;
    }
    public function htmlTableRow(){
        return "<tr><td>".$this->nev."</td><td>".$this->evjarat."</td><td>".$this->ajtoszam."</td><td>".$this->szin."</td></tr>";
    }
}
?>