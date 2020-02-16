<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Students;

class WebStudent extends Controller
{
    public function create(Request $request)
    {
        Students::create($request->all());
        return redirect()->route('lists.student');
    }

    public function lists()
    {
        return view('students/index')
            ->with(['students' => Students::all()]);
    }


}
