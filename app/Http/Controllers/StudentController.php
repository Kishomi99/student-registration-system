<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentStoreRequest;

class StudentController extends Controller
{    
        public function index()
        {            
            $student = Student::all();
            return view('pages.index', ['students' => $student]);
        }
        public function create()
        {
        return view('pages.create');
        }

        

    public function store(Request $request)
    {  
        $request->validate([
            'stu_name' => 'required|string',
            'email' => 'required|string',
            'phone_no' => 'required|integer',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'address' => 'required|string'
        ]);     
        $student = Student::create([
            'stu_name' => $request->stu_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address
        ]);
        return redirect()->route('students.index')->with('success', 'Success, New Student has been added successfully!');
    }

    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('pages.edit', compact('student'));
    }

    public function update(Request $request, string $id)
    {    
        $request->validate([
            'stu_name' => 'required|string',
            'email' => 'required|string',
            'phone_no' => 'required|integer',
            'gender' => 'required|string',
            'dob' => 'required|date',
            'address' => 'required|string'
        ]); 
        $student = Student::findOrFail($id);
        
        
        $student->update([
            'stu_name' => $request->stu_name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address
        ]);
        

        // Redirect the user back to the student's edit page with a success message
        return redirect()->route('students.index', $student->id)->with('update', 'Student updated successfully.');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('delete', 'Student deleted successfully.');
    }
    
}
