<?php


namespace App\Http\Repositories;


interface StudentRepositoryInterface
{
    function index();
    function store($student);
    function findById($id);
    function update($student);
    function destroy($student);
}
