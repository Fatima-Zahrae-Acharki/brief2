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


    public function delete(Request $request, $id){
        $promotion = Promotion::where('id', $id)->delete(['name'=>$request->name]);
        promotion::where('id', $id)->delete();
        return redirect("test");
        // promotion::where('id', $request->id)->delete();
        // return redirect("test");

    }

    // public function destroy($id)
    // {
    //     $promotion = Promotion::where('id', $id)->get();
    //     $promotion->delete();
    //     return redirect('/test');
    // }

    // public function search(){
    //     $data = Promotion::where('name', 'like', '%'.$this->request->name.'%');
    //     return view('test', compact('promotion'));
    // }
    // public function search($name){
    //     $data = Promotion::where('name', 'like', "%$name%")->get;
    //     return view('test', compact('promotion'));
    // }

    public function search($searchResult = null){
        if(
            $searchResult == null){
                $data = promotion::all();
                return $data;
            }
        else{
            $data = Promotion::where('name', 'like', "% . $searchResult . %")->get();
            return $data;
        }
    }
}
