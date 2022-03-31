<?php
require_once 'class_account.php';

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer = $customer;
    }

    public function transfer($ac_tujuan,$uang){
        $ac_tujuan->deposit($uang);
        $this->withdrawl($uang);
        $this->withdrawl(self::$biaya_admin);

        }

    public function cetak(){
        parent::cetak();
        echo '<br/>customer : '.$this->customer;
    }
    public function getSaldo(){
        return $this->saldo;
    }
}

?>