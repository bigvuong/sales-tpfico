<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request) {
        $canonical = $request->url();
        return view('site.contact.index', compact('canonical'));
    }
}
