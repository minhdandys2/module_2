<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\EditStudentRequest;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
        $this->middleware('auth');
    }

    public function index()
    {
        $students = $this->student->paginate(5);
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateStudentRequest $request)
    {
        $this->student->name = $request->name;
        $this->student->phone = $request->phone;
        $this->student->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $this->student->image = $path;
        }
        $this->student->save();
        return redirect()->route('student.index');
    }

    public function delete($id)
    {
        $student = $this->student->findOrFail($id);
        File::delete(storage_path('app/public/'.$student->image));
        $student->delete();
        return redirect()->route('student.index');
    }

    public function edit($id)
    {
        $student = $this->student->findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update(EditStudentRequest $request, $id)
    {
        $student = $this->student->findOrFail($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        if ($request->hasFile('image')) {
            File::delete(storage_path('app/public/'.$student->image));
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $student->image = $path;
        }
        $student->save();
        return redirect()->route('student.index');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataSearch = DB::table("students")
            ->where("name", "like", "%$search%")
            ->orwhere("phone", "like", "%$search%")
            ->orwhere("address", "like", "%$search%")
            ->paginate(2);
        return view('search', compact('dataSearch'));
    }
}
