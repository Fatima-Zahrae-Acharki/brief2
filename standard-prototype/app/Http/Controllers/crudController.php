<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotion;

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
       $promotion = new Promotion where id = $id;
  
    }
    public function update_promotion(Request $request){
        
    }
}
