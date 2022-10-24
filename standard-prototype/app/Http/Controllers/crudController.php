<?php

namespace App\Http\Controllers;

use App\Http\Controllers\crudController as ControllersCrudController;
use Illuminate\Http\Request;
use App\Models\promotion;
use Illuminate\Support\Facades\Redirect;

class crudController extends Controller
{
    public function insert(Request $request){
        $promo = new promotion;
        $promo->name = $request->name;
        $promo->save();
        redirect('/test');
        
    }
    public function show(){
        $data = promotion::All();
        return view('test', compact('data'));
    }

    public function edit_promotion($id){
       $promotion = Promotion::where('id', $id)->get();
       return view('edit',compact('promotion'));
    }
    public function update(Request $request, $id){
        $promotion = Promotion::where('id', $id)->update(['name'=>$request->name]);
        return redirect('test');
    }

    // public function destroy($id)
    // {
    //     $promotion = Promotion::where('id', $id)->get();
    //     $promotion->delete();
    //     return redirect('/test');
    // }
}
