<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Category;

class BaseController extends Controller
{
    public function __construct()
    {
        $cats = Category::where('active', 1)->get()->toTree();
        View::share('cats', $cats);
    }
}
