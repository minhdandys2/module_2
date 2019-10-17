<?php
include_once 'DBConnect.php';
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
            $student = new Student($value['name'], $value['phone'], $value['address'],$value['image']);
            $student->id = $value['id'];
            array_push($students, $student);
        }
        return $students;
    }

    public function add($student)
    {
        $stmt = $this->conn->prepare('INSERT INTO student(name, phone, address,image) VALUES (:name, :phone, :address,:image)');
        $stmt->bindParam(':name', $student->name);
        $stmt->bindParam(':phone', $student->phone);
        $stmt->bindParam(':address', $student->address);
        $stmt->bindParam(':image', $student->image);
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
        $stmt = $this->conn->prepare('UPDATE student SET name=:name , phone = :phone , address =:address , image=:image WHERE id = :id');
        $stmt->bindParam(':name', $data->name);
        $stmt->bindParam(':phone', $data->phone);
        $stmt->bindParam(':address', $data->address);
        $stmt->bindParam(':image', $data->image);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getStudentById($id)
    {
        $stmt = $this->conn->prepare('SELECT name,phone,address,image FROM student WHERE id=:id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $student = new Student($result['name'], $result['phone'], $result['address'],$result['image']);
        return $student;
    }
}