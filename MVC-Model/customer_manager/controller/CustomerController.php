<?php
namespace controller;
use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{

    public $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=mvcModel", "root", "123456@Abc");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            $customer = new Customer($name, $email, $address);
            $this->customerDB->insert($customer);
            $message = 'Customer created';
            include 'view/add.php';
        }
    }
}