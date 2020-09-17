<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Employee::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmployeeCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeCreateRequest $request)
    {
        // Get validated request body parameters
        $validated = $request->validated();

        // Create employee
        $employee = new Employee();
        $employee->name = $validated['name'];
        $employee->email = $validated['email'];

        $employee->save();

        // Success Reesponse with created employee data
        return response()->json([
            "message" => "Employee is created successfully.",
            "data" => $employee
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fetch employee by id
        $employee = Employee::find($id);

        return response()->json([
            "data" => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EmployeeUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {

        // Get validated request body parameters
        $validated = $request->validated();

        // Fetch employee by id
        $employee = Employee::find($id);

        // Update employee from request body parameters
        $employee->name = $validated['name'];
        $employee->email = $request['email'];

        $employee->save();

        // Success Reesponse with updated employee data
        return response()->json([
            "message" => "Employee is updated successfully.",
            "data" => $employee
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Fetch employee by id
        $employee = Employee::find($id);

        // Delete employee
        $employee->delete();

        // Success Reesponse with deleted employee data
        return response()->json([
            "message" => "Employee is deleted successfully.",
            "data" => $employee
        ]);
    }
}
