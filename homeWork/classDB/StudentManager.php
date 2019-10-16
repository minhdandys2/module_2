<?php
include_once 'DBconnect.php';
include_once 'Student.php';

class StudentManager
{
    public $conn;

    public function __construct()
    {
        $conn = new DBconnect('mysql:host=localhost;dbname=my_database', 'root', '123456@Abc');
        $this->conn = $conn->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM student";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $students = [];
        foreach ($result as $value) {
            $student = new Student($value['name'], $value['phone'], $value['address']);
            $student->id = $value['id'];
            array_push($students, $student);
        }
        return $students;
    }

    public function add($student)
    {
        $stmt = $this->conn->prepare('INSERT INTO student(name, phone, address) VALUES (:name, :phone, :address)');
        $stmt->bindParam(':name', $student->name);
        $stmt->bindParam(':phone', $student->phone);
        $stmt->bindParam(':address', $student->address);
        $stmt->execute();
    }

    public function delete($index)
    {
        $stmt = $this->conn->prepare('DELETE FROM student WHERE id=:id');
        $stmt->bindParam(':id', $index);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare('UPDATE student SET name=:name , phone = :phone , address =:address WHERE id = :id');
        $stmt->bindParam(':name', $data->name);
        $stmt->bindParam(':phone', $data->phone);
        $stmt->bindParam(':address', $data->address);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $stmt = $this->conn->prepare('SELECT name,phone,address FROM student WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $student = new Student($result['name'], $result['phone'], $result['address']);
        return $student;
    }
}