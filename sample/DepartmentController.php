<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all Departments
        $allDepartments = Department::all();

        // Success Reesponse with all department data
        return response()->json([
            "data" => $allDepartments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get validated request body parameters
        $validated = $request->validated();

        // Create department
        $department = new Department();
        $department->name = $validated['name'];
        $department->email = $validated['description'];
        $department->email = $validated['slogan'];

        $department->save();

        // Success Reesponse with created department data
        return response()->json([
            "message" => "Department is created successfully.",
            "data" => $department
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
        // Fetch department by id
        $department = Department::findOrFail($id);

        if(!$department) {
            return response()->json('Department not found', 404);
        }

        return response()->json([
            "data" => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Get validated request body parameters
        $validated = $request->validated();

        // Fetch department by id
        $department = Department::findOrFail($id);

        // Update department from request body parameters
        $department->name = $validated['name'];
        $department->email = $request['email'];

        $department->save();

        // Success Reesponse with updated department data
        return response()->json([
            "message" => "Department is updated successfully.",
            "data" => $department
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
        // Fetch department by id
        $department = Department::findOrFail($id);

        if(!$department) {
            return response()->json('Department not found', 404);
        }

        // Delete department
        $department->delete();

        // Success Reesponse with deleted department data
        return response()->json([
            "message" => "Department is deleted successfully.",
            "data" => $department
        ]);
    }
}
