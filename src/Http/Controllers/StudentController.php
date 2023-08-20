<?php

namespace Mrmohsin\Crudpackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mrmohsin\Crudpackage\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students =Student::all();
        return view('create::index',get_defined_vars());
    }
    public function create()
    {
        return view('create::create');
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'number' => $request->number,
        ]);
        $student->save();
        return redirect()->route('student.index')->with('success', 'Student added successfully.');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('create::edit',get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'number' => $request->number,
        ]);
        return redirect()->route('student.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }
}
