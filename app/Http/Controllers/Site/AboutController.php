<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request) {
        $canonical = $request->url();
        return view('site.about.index', compact('canonical'));
    }
}
