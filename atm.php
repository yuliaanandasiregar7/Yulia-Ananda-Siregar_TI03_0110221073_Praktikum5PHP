<?php
require_once 'class_account.php';

$ac1 = new Account("C001",6000000);
$ac2 = new Account ("C002",5350000);
$ac3 = new Account ("C003",2500000);


$ac1->cetak();
$ac1->deposit(1000000);
echo '<br/>nabung 1000000<br/>';
$ac1->cetak();
echo '<hr>';

$ac1->cetak();
$ac1->withdrawl(1500000);
echo '<br/>transfer 1500000<br/>';
$ac1->cetak();
echo '<hr>';

$ac1->cetak();
$ac1->withdrawl(500000);
echo '<br/>transfer 500000<br/>';
$ac1->cetak();
echo '<hr>';

echo '<h4/></h4>';
$ac2->cetak();
$ac2->deposit(500000);
echo '<br/>terima uang 500000<br/>';
$ac2->cetak();
echo '<hr>';

echo '<h4/></h4>';
$ac3->cetak();
$ac3->deposit(1500000);
echo '<br/>terima uang 1500000<br/>';
$ac3->cetak();
echo '<hr>';

echo '<h4/></h4>';
$ac2->cetak();
$ac2->withdrawl(2500000);
echo '<br/>tarik uang 2500000 <br/>';
$ac2->cetak();


?>