<?php

require __DIR__ . '/vendor/autoload.php';

use App\OrderStatus;
use App\StartOrderProcess;

define('BASE_PATH', __DIR__);

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

$order_number = OrderStatus::storeOrder($order);
StartOrderProcess::OrderProcess($order_number);
