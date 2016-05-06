<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Category;
use App\PartnerCategory;
use App\Http\Requests;
use Validator;



class PartnerController extends Controller
{
    public function index(){
        return view('admin.partner.index',['partners' => Partner::all()]);
    }

    public function create()
    {
        return view('admin.partner.create',['partner_categories' => PartnerCategory::all() ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'name' => 'required|unique:partners,name',
        'introduction' => 'required',
         'partnercategory' => 'required',
        'logourl' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
            $partner = new Partner();
            $partner->name   = $request['name'];
            $partner->introduction   = $request['introduction'];
            $partner->partnercategoryname = $request['partnercategory'];
            $partner->logourl   = $request['logourl'];
            $partner->connect  = $request['connect'];
            $partner->save();
            return redirect()->route('partner.index');
        }
    }

    public function edit($id)
    {
        return view('admin.partner.edit',['partner_categories' => PartnerCategory::all(), 'partner' => Partner::where('id', $id)->first()]);
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(),[
        'name' => 'required',
        'introduction' => 'required',
         'partnercategory' => 'required',
        'logourl' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
           return  back()->withErrors($validator)->withInput();
        } else {
            $partner = Partner::where('id', $id)->first();;
            $partner->name   = $request['name'];
            $partner->introduction   = $request['introduction'];
            $partner->partnercategoryname = $request['partnercategory'];
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
        return view('partner.list', ['categories' => Category::all(),'partner_categories' => PartnerCategory::all(), 'partners' => Partner::all()]);
    }
}
