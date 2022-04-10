<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>DATA</title>
  </head>
  <body>
    <h1 style= "text-align : center">ACCOUNT-BANK</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <table class="table table-success table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">No Account</th>
        <th scope="col">Pemilik</th>
        <th scope="col">Saldo</th>
        </tr>
        <?php 
        require_once 'class_accountBank.php'; 
        $ac1 = new AccountBank ('C001',6000000, 'Ahmad');
        $ac2 = new AccountBank ('C002',5350000, 'Budi');
        $ac3 = new AccountBank ('C003', 2500000, 'Kurniawan');
        $ar_account = [$ac1, $ac2, $ac3];

        $nomor = 1;
        foreach ($ar_account as $nilai) {
            ?>
        <tr>
            <td>
                <?=$nomor?>
            </td>
            <td>
                <?=$nilai->nomor?>
            </td>
            <td>
                <?=$nilai->customer?>
            </td>
            <td>
                <?=$nilai->saldo()?>
            </td>
        </tr>
        
        <?php
        $nomor++;
        }
        ?>
    </thead>
    </table>
  </body>
    <?php

    $ac1->deposit(1000000);
    echo 'Ahmad Menabung 1.000.000';
    $ac1->cetak();
    
    $ac2->withdraw(500000);
    echo '<br/> Budi Tarik uang 2.500.000';
    $ac2->cetak();
    ?>
</html>