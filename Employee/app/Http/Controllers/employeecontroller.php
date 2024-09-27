<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=employee::all();
       return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employees=new Employee();
        $employees->name=$request->name;
        $employees->address=$request->address;
        $employees->save();
        return view('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee=Employee::find($id);
        return view('employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees=Employee::find($id);
        $employees->name=$request->name;
        $employees->address=$request->address;
       $employees->update();
       return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees=Employee::find($id);
        $employees->delete();
        return redirect()->route('employee.index');
    }
}
