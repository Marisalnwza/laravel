<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Family;
use App\Http\Requests\UpdateStudent;
use App\Http\Requests\DeleteStudent;
use App\Http\Requests\CreateStudent;
use App\Http\Requests\DetailStudent;
use App\Http\Requests\ListsStudent;

class StudentsController extends Controller
{
    public function create(CreateStudent $request)
    {
        $student = Students::create($request->all());
        
        Family::create($request->all());

        return $student->with('family')->get();
    }

    public function detail(DetailStudent $request)
    {
        return Students::where('id',$request->id)->with('family')->first();

        //$student =  Students::find($request->id);
        //Family::find($request->id);
       // return $student->with('family')->get();
    }

    public function lists(ListsStudent $request)
    {
        return Students::where(['student_id' => $request->get('student_id')])
            //->where(['first_name' => $request->get('first_name')])
            ->get();
    }
    
    public function update(UpdateStudent $request)
    {
        $student = Students::find($request->id);
        $student->update($request->all());
        return Students::find($request->id);
    }

    public function delete(DeleteStudent $request)
    {
        $student = Students::find($request->id);
        $delete = $student->delete();
        return array(['delete' => $delete,'student_id' => '07600497']);

    }
}
