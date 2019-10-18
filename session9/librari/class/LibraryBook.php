<?php
include_once 'DBConnect.php';
include_once 'Book.php';


class LibraryBook
{
    public $conn;
    public function __construct()
    {
        $conn = new DBConnect('mysql:host=localhost;dbname=Library','root','123456@Abc');
        $this->conn = $conn->connect();
    }
    public function getAll(){
        $sql = 'SELECT * FROM Library';
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $books = [];
        foreach ($result as $value){
            $book = new Book($value['name'],$value['author'],$value['category'],$value['image']);
            $book->id = $value['id'];
            array_push($books,$book);
        }
        return $books;
    }
    public function addBook($book){
        $stmt =$this->conn->prepare('INSERT INTO Library(name,author,category,image) VALUES (:name,:author,:category,:image)');
        $stmt->bindParam(':name',$book->name);
        $stmt->bindParam(':author',$book->author);
        $stmt->bindParam(':category',$book->category);
        $stmt->bindParam(':image',$book->image);
    }
}