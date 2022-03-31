<?php
require_once 'class_accountbank.php';

$ab1 = new AccountBank("C001",6000000,"Ahmad");
$ab2 = new AccountBank("C002",5350000,"Budi");
$ab3 = new AccountBank("C003",2500000,"Kurniawan");


/*echo '<h4>Saldo Awal Ahmad</h4>';
$ab1->cetak();
echo '<hr>';

echo '<h4>Saldo Awal Budi</h4>';
$ab2->cetak();
echo '<hr>';

echo '<h4>Saldo Awal Kurniawan</h4>';
$ab3->cetak();
echo '<hr>';

echo '<h4>Ahmad Nabung</h4>';
$ab1->deposit(1000000);
echo 'nabung : 1000000 <br/>';
$ab1->cetak();
echo '<hr>';*/

/*echo '<h4>Ahmad Transfer Ke Kurniawan</h4>';
$ab3->cetak();
echo '<br>Ahmad transfer uang ke Kurniawan 1500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';*/
$ab1->transfer($ab3,1500000);
/*$ab1->cetak();
echo '<hr>';*/

/*echo '<h4>Saldo Akhir Kurniawan</h4>';
$ab3->cetak();
echo '<hr>';*/

/*echo '<h4>Ahmad Transfer Ke Budi</h4>';
$ab2->cetak();
echo '<br>Ahmad transfer uang ke Budi 500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';*/
$ab1->transfer($ab2,500000);
/*$ab1->cetak();
echo '<hr>';*/

/*echo '<h4>Saldo Budi</h4>';
$ab2->cetak();
echo '<hr>';

echo '<h4>Budi Tarik Uang</h4>';
$ab2->withdrawl(2500000);
echo 'tarik uang : 2500000 <br/>';
$ab2->cetak();*/


$ar_ab = [$ab1,$ab2];

$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo= $_POST['saldo'];

$ab3 = new AccountBank($_norek,$_saldo,$_customer);
array_push($ar_ab,$ab3);


?>

<table class="table table-success table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th><th>No.Rekening</th><th>Customer</th>
            <th>Saldo</th>
        </tr>
</thead>
<tbody>
    <?php
        $nomor = 1;
        foreach($ar_ab as $obj){
    ?>
         <tr>   
             <td><?= $nomor?></td>
             <td><?=$obj->nomor?></td>
             <td><?=$obj->customer?></td>
             <td><?=$obj->getSaldo()?></td>

        </tr>
    <?php
    $nomor++;
        }
    ?>

</tbody>
</table>

