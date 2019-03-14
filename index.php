<?php

include 'vendor/autoload.php';

$customer = 'CST0000158';
$ordered_products = [
    [
        'product_code' => 12341563,
        'size' => 'L',
        'amount' => 1,
    ],
    [
        'product_code' => 12341785,
        'size' => 'L',
        'amount' => 2,
    ],
    [
        'product_code' => 12341951,
        'size' => 'L',
        'amount' => 2,
    ],
    [
        'product_code' => 12341952,
        'size' => 'L',
        'amount' => 1,
    ],
    [
        'product_code' => 12341952,
        'size' => 'M',
        'amount' => 2,
    ],
    [
        'product_code' => 12341563,
        'size' => 'L',
        'amount' => 2,
    ],
];

use App\Order\OrderStrategy;

try {
    $order = new OrderStrategy('open');
    echo $order->executeOrder(1234);
} catch (\Exception $e) {
    echo $e->getMessage();
}


?>
<!doctype html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tremendous Tees</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="responsive-table">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Order nummer</th>
                        <th>Klantnummer</th>
                        <th>Producten</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>