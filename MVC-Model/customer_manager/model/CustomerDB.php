<?php
namespace Model;

class CustomerDB
{
    public $connection ;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function insert($customer){
        $sql = 'INSERT INTO customer(name,email,address) VALUES (:name,:email,:address)';
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':name',$customer->name);
        $statement->bindParam(':email',$customer->email);
        $statement->bindParam(':address',$customer->address);
        $statement->execute();
    }
}