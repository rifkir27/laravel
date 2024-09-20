<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    //list student
    function index()
    {
        $students =  student::all();

          
            return $students;
    }

    //show student
    function show($nis)
    {
        $student = student::where('nis', $nis)->get();
        return $student;
    }

    //create student
    function create(request $request)
    {
//validasi
$validate = $request->validate([
    'name' => ['required'],
    'nis' => ['required', 'numeric'],
    'grade' => ['required'],
    'gender' => ['required'],
    'age' => ['required', 'numeric'],



]);

//dave db
$student =  Student::create($validate);


//return data
return $student;
    }

    //update student
    function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['required', 'numeric'],
        ]);
        $student = student::find($id);
        $student->update($validated);
       // $student->name = $validated['name']
       $student->save();
       return $student;
    }

    //destroy student
    function destroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return $student;
    }
}
