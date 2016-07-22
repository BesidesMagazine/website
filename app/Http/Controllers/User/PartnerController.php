<?php

namespace app\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Partner;
use App\PartnerCategory;

class PartnerController extends Controller
{
    public function index()
    {
        return view('partner.list', ['partner_categories' => PartnerCategory::all(), 'partners' => Partner::all()]);
    }
}
