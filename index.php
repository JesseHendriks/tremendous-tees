<?php

require __DIR__ . '/vendor/autoload.php';

use App\OrderStatus;
use App\StartOrderProcess;

use App\Inventory\Product;
use App\Inventory\ProductSize;

define('BASE_PATH', __DIR__);
echo '<h1>Tremendous Tees</h1>';
$order = (object)[
    'customer_number' => 'CST0000123',
    'products' => (object)[
        (object)[
            'product_code' => 'jh-12346-awesome-guitar-v-neck',
            'shirt_size' => 'L',
            'amount' => 1,
        ],
        (object)[
            'product_code' => 'jh-654321-stratocaster-regular',
            'shirt_size' => 'L',
            'amount' => 2,
        ],
        (object)[
            'product_code' => 168334528,
            'shirt_size' => 'L',
            'amount' => 2,
        ],
        (object)[
            'product_code' => 16588223,
            'shirt_size' => 'L',
            'amount' => 1,
        ],
        (object)[
            'product_code' => 16588223,
            'shirt_size' => 'M',
            'amount' => 2,
        ],
    ]
];

echo '<h3>Met de volgende data wordt de applicatie gestart:</h3>';
var_dump($order);
echo '<hr>';

// Start
$order_number = OrderStatus::storeOrder($order);
echo '<h3>Order wordt aangemaakt, ordernummer is: '.$order_number.'</h3><hr>';

$orderDetails = \App\Helpers\OrderDetails::getOrderDetails($order_number);
$orderDetails['customer'] = \App\Helpers\OrderDetails::getCustomerDetails($orderDetails['order']->customer_number);

var_dump($orderDetails);

// Start order strategy (OPEN)
echo '<h3>Order proces wordt gestart</h3>';
StartOrderProcess::OrderProcess($order_number, $orderDetails);


echo '<h3>De volgende producten waren niet op voorraad. Deze zijn besteld bij de leverancier</h3>';
