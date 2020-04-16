<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeViewController extends Controller
{
    public function index() {
//        $tournaments = App\Tournaments::all();
        $news = App\News::all();
        $blogs = App\Blog::all();
        return view('index', [
            'news' => $news,
            'blogs' => $blogs
        ]);
    }
}
