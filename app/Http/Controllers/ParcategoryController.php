<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Parcategory;
use App\Http\Requests;
use Validator;

class ParcategoryController extends Controller
{
     public function index(){
        return view('admin.parcategory.index', ['parcategories' => Parcategory::all()]);
    }

     public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'parcategoryname' => 'required|unique:parcategories,name',
        ]);
        if ($validator->fails()) {
           return  redirect()->route('parcategory.index')->withErrors($validator);
        } else {
            $parcategory = new Parcategory();
            $parcategory->name   = $request['parcategoryname'];
            $parcategory->save();
            return redirect()->route('parcategory.index');
        }
    }

     public function edit($id){
        return view('admin.parcategory.edit',['parcategory' => Parcategory::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'parcategoryname' => 'required|unique:parcategories,name',
        ]);
        if ($validator->fails()) {
           return  back()->withErrors($validator);
        } else {
            $parcategory = Parcategory::where('id', $id)->first();
            $parcategory->name   = $request['parcategoryname'];
            $parcategory->save();
            return redirect()->route('parcategory.index');
        }
    }

     public function destroy($id){
        Parcategory::where('id', $id)->delete();
        return redirect()->route('parcategory.index');
    }
}
