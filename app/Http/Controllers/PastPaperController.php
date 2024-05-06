<?php

namespace App\Http\Controllers;

use App\Models\PastPaper;
use App\Models\CourseUnit;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade

class PastPaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_units = CourseUnit::all();
        $programs = Program::all();
        return view('dashboard/create-past-paper', compact('course_units', 'programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $past_papers = PastPaper::all();
        return view('dashboard/view-past-papers', compact('past_papers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            
            // Create a new past paper entry in the database
            $pastPaper = new PastPaper();
            $pastPaper->pastpaper = $request->input('pastpaper');
            $pastPaper->program = $request->input('program');
            $pastPaper->courseunit = $request->input('courseunit');
            $pastPaper->yearofstudy = $request->input('yearofstudy');
            
            if ($request->hasFile('pdf_file')) {
                $file = $request->file('pdf_file');
                $fileName = $file->getClientOriginalName(); // Get the original file name
                $file->move(public_path('past_papers'), $fileName);
                $pastPaper->pdf_file = $fileName;
            }
            

            if ($pastPaper->save()) {
                return redirect()->back()->with('success', 'Past Paper created successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to create Past Paper!');
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function show(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function edit(PastPaper $pastPaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PastPaper $pastPaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PastPaper  $pastPaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Find the past paper record in the database
        $pastPaper = PastPaper::findOrFail($id);
        
        // Delete the associated file from storage
        Storage::delete($pastPaper->pdf_file);
        
        // Delete the past paper record from the database
        if ($pastPaper->delete()) {
            return redirect()->back()->with('success', 'Past Paper deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete Past Paper!');
        }
    }
}
