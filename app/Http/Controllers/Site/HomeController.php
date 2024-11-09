<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectLocation;
use App\Models\Project;
use App\Models\ProjectCategory;

class HomeController extends Controller
{
    public function index(Request $request) {
        $canonical = $request->url();
        return view('site.landing.index', compact(
            'canonical'
        ));
    }
}
