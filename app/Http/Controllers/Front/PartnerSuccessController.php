<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\PartnerSuccess;
use App\Http\Controllers\Controller;

class PartnerSuccessController extends Controller
{
    public function index()
    {
        $partners_success = PartnerSuccess::query()->select('id', 'image')->get();
        return view('site.partner_success', compact('partners_success'));
    }
}