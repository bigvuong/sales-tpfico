<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostsController extends Controller
{
    public function index(Request $request) {
        $canonical = $request->url();
        $posts = Post::paginate(12);
        return view('site.blog.index', compact(
            'canonical',
            'posts'
        ));
    }

    public function show(Request $request, $slug) {
        $canonical = $request->url();
        $post = Post::where('slug', $slug)->first();
        return view('site.blog.detail', compact(
            'canonical',
            'post'
        ));
    }
}
