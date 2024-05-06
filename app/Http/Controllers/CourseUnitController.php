<?php

namespace App\Http\Controllers;

use App\Models\CourseUnit;
use Illuminate\Http\Request;

class CourseUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/create-course-unit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_units = CourseUnit::all(); // Retrieve all course units from the database
        return view('dashboard/view-course-units', compact('course_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseUnit = new CourseUnit();
        $courseUnit->courseunit = $request->input('courseunit');
        $courseUnit->department = $request->input('department');
        $courseUnit->description = $request->input('description');
        $courseUnit->save();

        if ($courseUnit->save()) {
            // Course unit saved successfully
            return redirect()->back()->with('success', 'Course unit created successfully!');
        } else {
            // Failed to save course unit
            return redirect()->back()->with('error', 'Failed to create course unit!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseUnit  $courseUnit
     * @return \Illuminate\Http\Response
     */
    public function show(CourseUnit $courseUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseUnit  $courseUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseUnit $courseUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseUnit  $courseUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseUnit $courseUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseUnit  $courseUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseUnit $courseUnit)
    {
        //
    }
}
