<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\PropertyType;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.home.index');
    }

    public function category($slug)
    {
        $category=PropertyType::with('blogs')->where('slug',$slug)->first();

        return view('frontend.category',compact('category'));
    }

    public function search(Request $request)
    {
        $blogs=Blog::where('title','like',"%$request->search%")->orwhere('short_description','like',"%$request->description%")->orwhere('long_description','like',"%$request->description%")->paginate(24);

        return view('frontend.search',compact('blogs'));
    }


    public function detail( $slug)
    {
        $blog=Blog::where('title',"$slug")->firstorFail();

        return view('frontend.detail',compact('blog'));
    }
}
