<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use View;
use App\Category;
use Jenssegers\Agent\Agent;

class BaseController extends Controller
{
    public function __construct()
    {
        $cats = Category::where('parent_id', null)->get();
        $pages = Page::all();
        $agent = new Agent();
        View::share('cats', $cats);
        View::share('pages', $pages);
        View::share('agent', $agent);
    }
}
