<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        try {
            $course = new Course;
            
            $course->course_title = $request->course_title;
            $course->course_description = $request->course_description;
            $course->course_price=$request->course_price;
            

            $course->save();

            return redirect('/admin_create_course')->with('status', 'success');
        }   catch (Exception $e) {
            return redirect('/admin_create_course')->with('status', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $course = Course::all();

        return view('admin_course_overview', compact('course'));
    }

    public function displayCourse()
    {
        $course = Course::all();
        $status = session('status');


        return view('admin_manage_course', compact('course', 'status'));
    }

    public function showUserForm(Course $course)
    {
        $course = Course::all();

        return view('adminRegister', compact('course'));
    }

    public function showUserEditForm(Course $course)
    {
        $courses = Course::all();

        return view('admin_edit_user', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('admin_edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        
        $course->update([
            'course_title' => $request->course_title,
            'course_description' => $request->course_description,
            'course_price' => $request->course_price,
            'course_status' => $request->course_status,
        ]);

        return redirect()->route('admin_manage_course')->with('status', 'success');
    }

    public function deactivateCourse($id)
    {
        $course = Course::find($id);

        if ($course) {
            //$course->update(['course_status' => false]);
            $course->course_status = false;
            $course->save();
        }

        return redirect()->route('admin_manage_course')->with('status', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
