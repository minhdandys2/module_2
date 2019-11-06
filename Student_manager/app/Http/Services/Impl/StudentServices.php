<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\StudentRepositoryInterface;
use App\Http\Services\StudentServicesInterface;
use App\Student;
use Illuminate\Support\Facades\Storage;

class StudentServices implements StudentServicesInterface
{
    protected $studentRepository;

    public function __construct(StudentRepositoryInterface $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function getAll()
    {
        return $this->studentRepository->index();
    }

    public function create($request){
        $student = new Student();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $student->image = $path;
        }
        return $this->studentRepository->store($student);
    }

    public function findById($id)
    {
        return $this->studentRepository->findById($id);
    }

    public function edit($request, $id)
    {
        $student = $this->studentRepository->findById($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            Storage::delete('public/'.$student->image);
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $student->image = $path;
        }
        return $this->studentRepository->update($student);
    }

    public function delete($id)
    {
        $student = $this->studentRepository->findById($id);
        Storage::delete('public/'.$student->image);
        $this->studentRepository->destroy($student);
    }
}
