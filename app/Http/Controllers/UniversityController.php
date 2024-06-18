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
        return view('students.all', compact('students'));
    }

    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function showAllColleges()
    {
        $colleges = College::with('departments')->get();
        return view('colleges.all', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = College::with('departments')->findOrFail($id);
        return view('colleges.show', compact('college'));
    }

    public function showAllDepartments()
    {
        $departments = Department::with('college')->get();
        return view('departments.all', compact('departments'));
    }
}
