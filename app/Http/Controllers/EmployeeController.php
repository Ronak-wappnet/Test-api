<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = employee::all();
        return response()->json([
            'message' => 'Data of Employees',
            'employee' => $data,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $employee = new employee;
        $employee->emp_name = $request->emp_name;
        $employee->designation = $request->designation;
        $employee->salary = $request ->salary;
        $employee -> save();
        
        return response()->json([
            'message' => 'employee created',
            'emp_data' => $employee,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = employee::find($id); 
        return response()->json([
            'employee' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $employee = employee::find($id);
        $employee->emp_name = $request->emp_name;
        $employee->designation = $request->designation;
        $employee->salary = $request->salary;
        $employee->save();

        return response()->json([
            'message' => 'Employee updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return response()->json([
            'message' => 'employee deleted successfully',
        ]);
    }
}
