<?php


namespace App\Http\Services;


interface StudentServicesInterface
{
    public function getAll();
    public function create($student);
    public function findById($id);
    public function edit($request,$id);
    public function delete($id);
}
