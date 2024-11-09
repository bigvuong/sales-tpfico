<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;
use Gate;
use Session;
use Illuminate\Http\Request;

class DashboardController
{
    public function index()
    {
    	$posts = Post::count();
        $projects = Project::count();
        return view('admin.dashboard.index', compact(
        	'posts',
            'projects'
        ));
    }
}