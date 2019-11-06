<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\StudentRepositoryInterface;
use App\Student;

class StudentEloquentRepository implements StudentRepositoryInterface
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    function index()
    {
        return $this->student->paginate(2);
    }

    public function store($student)
    {
        return $student->save();
    }

    function findById($id)
    {
        return $this->student->findOrFail($id);
    }

    function update($student)
    {
        return $student->save();
    }

    function destroy($student)
    {
        return $student->delete();
    }
}
