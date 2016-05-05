<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Category;
use App\Parcategory;
use App\Http\Requests;
use Validator;



class PartnerController extends Controller
{
    public function index(){
        return view('admin.partner.index',['partners' => Partner::all()]);
    }

    public function create()
    {
        return view('admin.partner.create',['parcategories' => Parcategory::all() ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'name' => 'required|unique:partners,name',
        'introduction' => 'required',
         'parcategory' => 'required',
        'logourl' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
            $partner = new Partner();
            $partner->name   = $request['name'];
            $partner->introduction   = $request['introduction'];
            $partner->parcategory_name = $request['parcategory'];
            $partner->logourl   = $request['logourl'];
            $partner->connect  = $request['connect'];
            $partner->save();
            return redirect()->route('partner.index');
        }
    }

    public function edit($id)
    {
        return view('admin.partner.edit',['parcategories' => Parcategory::all(), 'partner' => Partner::where('id', $id)->first()]);
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(),[
        'name' => 'required',
        'introduction' => 'required',
        'parcategory' => 'required',
        'logourl' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
            $partner = Partner::where('id', $id)->first();;
            $partner->name   = $request['name'];
            $partner->introduction   = $request['introduction'];
            $partner->parcategory_name = $request['parcategory'];
            $partner->logourl   = $request['logourl'];
            $partner->connect  = $request['connect'];
            $partner->save();
            return redirect()->route('partner.index');
        }
    }

    public function destroy($id)
    {
        Partner::where('id', $id)->delete();
        return redirect()->route('partner.index');
    }

    public function listPartners(){
        return view('partner.list', ['categories' => Category::all(),'parcategories' => Parcategory::all(), 'partners' => Partner::all()]);
    }
}
