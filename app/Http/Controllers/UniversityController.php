<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use App\Models\College;
use App\Models\Department;

class UniversityController extends Controller
{
    //
    public function showAllStudents()
    {
        $students = Student::all();
        return view('students.all', ['students' => $students]);
    }

    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', ['student' => $student]);
    }

    public function showAllColleges()
    {
        $colleges = College::all();
        $colleges = College::with('programs')->get();

        return view('colleges.all', ['colleges' => $colleges]);
    }
    public function showCollege($id)
    {
        $college = College::findOrFail($id);
        $colleges = College::with('departments')->get();
        $colleges = College::with('programs')->get();
        return view('college.show', ['college' => $college]);
    }

    public function showAllDepartments($id)
    {
        $departments = Department::all();
        $departments = College::with('colleges')->get();
        return view('departments.show', ['departments' => $departments]);
    }
}
