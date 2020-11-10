<?php
    class Termek{
        public $cikk;
        public $nev;
        public $db;
        public $gyarto;
        public $ar;

    public function __construct($cikk,$nev,$db,$gyarto,$ar){
        $this->cikk=$cikk;
        $this->nev=$nev;
        $this->db=$db;
        $this->gyarto=$gyarto;
        $this->ar=$ar;
    }

    }

    $t1=new  Termek(11,"vasalo",10,"Navon",5000);
    $t2=new  Termek(11,"kalyha",100,"LG",50000);
    $t3=new  Termek(11,"vas",10,"Nav",500);
    $termekek=[$t1,$t2,$t3];

    print_r($t1);
    echo "<br>";
    echo $t1->nev;

    foreach($t1 as $kulcs=>$ertek)
    echo "<br>".$kulcs." : ".$ertek;

    echo "<hr>";
    foreach($termekek as $obj)
    echo "<br>".$obj->nev." : ".$obj->ar." Ft";

    $file = new SplFileObject("raktar.txt");
    echo "<br>";
    $raktar=[];
    while(!$file->eof()) {
        $sor=$file->fgets();
        $sorTomb=explode(" ",$sor);
        $raktar[]=new Termek($sorTomb[0],$sorTomb[1],$sorTomb[2],$sorTomb[3],$sorTomb[4]);
    }
    echo "<hr>";
    print_r($raktar);
?>
