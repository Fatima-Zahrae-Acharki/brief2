<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class apprenticesController extends Controller
{
    public function insert_student(Request $request){

        $student = new apprentice;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student-> = $request->;
        $student->save();
        redirect('/edit');
    }
    
    public function addStudent(){
        return view('addStudent');
    }
}
