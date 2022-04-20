<?php
require_once 'class_account.php';

$ab1 = new AccountBank('C001', 6000000, 'Ahmad');
$ab2 = new AccountBank('C002', 5350000, 'Budi');
$ab3 = new AccountBank('C003', 2500000, 'Kurniawan');

echo '<h3 >Coba Praktikum 5 Bank</h3> <br>';
echo '<h4>Saldo Awal user</h4>';
$ab1->cetak();
echo '<br><hr><br>';
$ab2->cetak();
echo '<br><hr><br>';
$ab3->cetak();
echo '<br><hr><hr><br>';

echo 'Ahmad nabung 1.000.000<br>';
$ab1->deposit(1000000);
$ab1->cetak() ;

echo '<br><hr>';

echo 'Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi<br>';
$ab1->transfer($ab3, 1500000);
$ab1->cetak() .'<br>';
$ab3->cetak() .'<br>';
echo '<br><hr>';

echo 'Budi tarik uang 2.500.000';
$ab2->withdraw(2500000);
$ab2->cetak();
/*cho 'Customer Qeuwe menstransfer sebanyak 300.000 Kepada Pucek<br>';
$ab1->transfer($ab2, 300000);
$ab1->cetak();
echo '<br>';
$ab2->cetak();
echo '<br><hr><br>';
echo 'Customer opung menstransfer sebanyak 450.000 kepada quewe+ <br>';
$ab3->transfer($ab1, 450000);
$ab3->cetak();
echo '<br>';
$ab1->cetak();
echo '<br><hr><br>';
echo 'Customer pucek menstransfer sebanyak 150.000 kepada Opung <br>';
$ab2->transfer($ab3, 150000);
$ab2->cetak();
echo '<br>';
$ab3->cetak();
echo '<br><hr><br>';*/

echo '<h3>Sisa Saldo Akhir Hari Ini Costumer</h3><br><br>';
$ab1->cetak();
echo '<br><br>';
$ab2->cetak();
echo '<br><br>';
$ab3->cetak();
echo '<br><hr><br>';

$ar_ab=[$ab1, $ab2, $ab3];

/*$_norek = $_POST['norek'];
$_customer = $_POST['customer'];
$_saldo = $_POST['saldo'];*/

//$ab4 = new AccountBank($_norek,$_saldo, $_customer);
//array_push($ar_ab, $ab4);

?>
<table class='table'>
    <thead>
        <tr>
            <th>NO.</th> <th>No Rekening</th> <th>Costumer</th> <th>Sisa Saldo</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_ab as $obj){
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $obj->nomor ?></td>
                <td><?php echo $obj->customer ?></td>
                <td><?php echo $obj->getSaldo() ?></td>
            </tr>

            <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>