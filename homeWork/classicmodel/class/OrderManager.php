<?php
include_once 'DBConnect.php';
include_once 'Order.php';

class OrderManager
{
    protected $connect;

    public function __construct()
    {
        $db = new DBConnect('mysql:host=localhost;dbname=classicmodels', 'root', '123456@Abc');
        $this->connect = $db->connect();
    }

    public function getAllOrder()
    {
        $sql = 'SELECT o.orderNumber,o.orderDate,o.shippedDate,o.status,SUM(od.priceEach) AS priceEach
        FROM orders o
        JOIN orderdetails od on o.orderNumber = od.orderNumber
        GROUP BY o.orderNumber;';
        $stmt = $this->connect->query($sql);
        $list = $stmt->fetchAll();
        $orders = [];
        foreach ($list as $value) {
            $order = new Order($value['orderNumber'], $value['orderDate'], $value['shippedDate'], $value['status'],$value['priceEach']);
            array_push($orders, $order);
        }
        return $orders;
    }

}