<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\PartnerCategory;
use Validator;

class PartnerController extends Controller
{
    public function index()
    {
        return view('admin.partner.index', ['partners' => Partner::all()]);
    }

    public function create()
    {
        return view('admin.partner.create', ['partner_categories' => PartnerCategory::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|unique:partners,name',
        'introduction' => 'required',
         'partnercategory' => 'required',
        'logo_url' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $partner = new Partner();
            $partner->name = $request['name'];
            $partner->introduction = $request['introduction'];
            $partner->partner_category_name = $request['partnercategory'];
            $partner->logo_url = $request['logo_url'];
            $partner->connect = $request['connect'];
            $partner->save();

            return redirect()->route('adminmg.partner.index');
        }
    }

    public function edit($id)
    {
        return view('admin.partner.edit', ['partner_categories' => PartnerCategory::all(), 'partner' => Partner::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'introduction' => 'required',
         'partnercategory' => 'required',
        'logo_url' => 'required',
        'connect' => 'required',
        ]);

        if ($validator->fails()) {
            return  back()->withErrors($validator)->withInput();
        } else {
            $partner = Partner::where('id', $id)->first();
            $partner->name = $request['name'];
            $partner->introduction = $request['introduction'];
            $partner->partner_category_name = $request['partnercategory'];
            $partner->logo_url = $request['logo_url'];
            $partner->connect = $request['connect'];
            $partner->save();

            return redirect()->route('adminmg.partner.index');
        }
    }

    public function destroy($id)
    {
        Partner::where('id', $id)->delete();

        return redirect()->route('adminmg.partner.index');
    }
}
