<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::orderBy('created_at', 'DESC');
        // dd($courses);
        return view('courses.index', compact('courses'));
    }

}
