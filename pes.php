<?php
class pes{
    public $jmeno;
    //konstruktor pro jmeno psa
    public function __construct($jmeno)
    {
        $this->jmeno = $jmeno;
    }

    //funkce pro echovani mluvu psa
    public function mluv(){
        return 'Haf Haf!';
    }
}