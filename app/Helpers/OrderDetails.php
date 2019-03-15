<?php

namespace App\Helpers;

use App\Objects\Order;
use App\Objects\User;

class OrderDetails
{
    public static function getCustomerDetails($customer_number)
    {
        $userObject = new User();

        return $userObject->getUserByNumber($customer_number);
    }

    public static function getOrderDetails($order_number){
        $orderObject = new Order();

        $order = $orderObject->getOrderByNumber($order_number);
        $products = $orderObject->getProductsByOrderNumber($order_number);

        return [
            'order' => $order,
            'products' => $products,
        ];
    }
}