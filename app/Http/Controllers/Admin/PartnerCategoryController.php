<?php

namespace app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PartnerCategory;
use Validator;

class PartnerCategoryController extends Controller
{
    public function index()
    {
        return view('admin.partnercategory.index', ['partner_categories' => PartnerCategory::all()]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'partner_category_name' => 'required|unique:partner_categories,name',
        ]);
        if ($validator->fails()) {
            return  redirect()->route('adminmg.partnercategory.index')->withErrors($validator);
        } else {
            $partnercategory = new PartnerCategory();
            $partnercategory->name = $request['partner_category_name'];
            $partnercategory->save();

            return redirect()->route('adminmg.partnercategory.index');
        }
    }

    public function edit($id)
    {
        return view('admin.partnercategory.edit', ['partnercategory' => PartnerCategory::where('id', $id)->first()]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'partner_category_name' => 'required|unique:partner_categories,name',
        ]);
        if ($validator->fails()) {
            return  back()->withErrors($validator);
        } else {
            $partnercategory = PartnerCategory::where('id', $id)->first();
            $partnercategory->name = $request['partner_category_name'];
            $partnercategory->save();

            return redirect()->route('adminmg.partnercategory.index');
        }
    }

    public function destroy($id)
    {
        PartnerCategory::where('id', $id)->delete();

        return redirect()->route('adminmg.partnercategory.index');
    }
}
