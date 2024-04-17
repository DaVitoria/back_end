<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('Admin.course.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'price' => 'required',
            'role' => 'required',
            'validate' => 'required',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->description = $request->description;
        $course->picture = $request->picture;
        $course->price = $request->price;
        $course->role = $request->role;
        $course->validate = $request->validate;
        $course->user_id = Auth::id(); 

        $course->save();

        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }
    public function edit(Course $course)
    {
        return view('course.index', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'required|string',
            'price' => 'required|numeric',
            'role' => 'required|in:free,paid',
            'validate' => 'required|in:lifetime,one_year',
        ]);

        $course->update($request->all());

        return redirect()->route('course.index')->with('success', 'Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully');
    }
}
