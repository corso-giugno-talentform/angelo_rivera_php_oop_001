<?php

class Company
{

    public $cname;
    public $clocation;
    public $ctotaldip;
    public static $stipendio_medio_mensile = 1500;



    public function __construct($cname,  $clocation,  $ctotaldip = 0)
    {
        $this->cname = $cname;
        $this->clocation = $clocation;
        $this->ctotaldip = $ctotaldip;
    }

    public function getCdata()
    {
        if ($this->ctotaldip > 0) {
            echo "L'ufficio $this->cname con sede in $this->clocation ha ben $this->ctotaldip dipendenti.\n\n";
        } else {
            echo "L' ufficio $this->cname con sede in $this->clocation non ha dipendenti.\n\n";
        }
    }

    public function getCannualp($mesi)
    {
        if ($this->ctotaldip > 0) {
            $totm = $this->ctotaldip * (self::$stipendio_medio_mensile * $mesi);
            $tota = $this->ctotaldip * (self::$stipendio_medio_mensile * 12);
            echo "Il costo annuale dell'Ufficio $this->cname è di $tota Euro.\n\n";
            echo "Il costo totale per l'azienda $this->cname è di $totm Euro.\n\n";
        } else {
            echo "L' ufficio $this->cname con sede in $this->clocation non ha dipendenti.\n\n";
        }
    }
}


$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

$comps = [$company1, $company2, $company3, $company4, $company5];


foreach ($comps as $comp) {
    $comp->getCdata();
    $comp->getCannualp(2);
}
