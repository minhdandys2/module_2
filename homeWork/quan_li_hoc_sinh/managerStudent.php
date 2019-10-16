<?php

class ManagerStudent
{
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }
    public function readFileJsonToArray(){
        $data = file_get_contents($this->path);
        return json_decode($data,true);
    }
    public function addfile($student_one){
        $studentInfor = [
            "name" => $student_one->getName(),
            "address"=> $student_one->getAddress(),
            "phone" =>$student_one->getPhone(),
            "role" =>$student_one->getRole(),
            "group"=>$student_one->getGroup()
        ];
        $currenData = $this->readFileJsonToArray();
        array_push($currenData,$studentInfor);
        $this->saveDataToJson($currenData);
    }
    public function saveDataToJson($data){
        $newData = json_encode($data);
        return file_put_contents($this->path,$newData);
    }
}
$manager = new ManagerStudent("data.json");
