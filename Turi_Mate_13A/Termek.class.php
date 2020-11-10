<?php
class Termek
{
    public $cikk;
    public $nev;
    public $db;
    public $gyarto;
    public $ar;

    public function __construct($cikk, $nev, $db, $gyarto, $ar)
    {
        $this->cikk = $cikk;
        $this->nev = $nev;
        $this->db = $db;
        $this->gyarto = $gyarto;
        $this->ar = $ar;
    }

public function htmlLiTag($index){
    return $index==0 ? "" :"<li>".$this->nev."</li>";
}
    public function htmlOptionTag($index){
        return $index==0 ? "" : "<option value=".$this->cikk.">".$this->nev."</option>";
    }
public function htmlTableRow($index){
    return $index==0 ? "<thead><th>".$this->cikk."</th><th>".$this->nev."</th><th>".$this->db."</th><th>".$this->gyarto."</th><th>".$this->ar."</th></thead>" :
                        "<tr><td>".$this->cikk."</td><td>".$this->nev."</td><td>".$this->db."</td><td>".$this->gyarto."</td><td>".$this->ar."</td></tr>";
}
public function megjelenit(){
    return $this->cikk." ".$this->nev." ".$this->db." ".$this->gyarto." ".$this->ar." ";
}
}
?>