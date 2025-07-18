<?php

class Company
{

    public $cname;
    public $clocation;
    public $ctotaldip;



    public function __construct($cname,  $clocation,  $ctotaldip)
    {
        $this->cname = $cname;
        $this->clocation = $clocation;
        $this->ctotaldip = $ctotaldip;
    }
}
