<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function welcome()
    {
        return view('welcome');
    }

    public function catalog($alias)
    {
        $category = Category::whereAlias($alias)->first();
        if (!$category) {
            abort(404);
        }

        if (count($category->children) == 0) {
            $products = $category->getProducts();
            return view('catalog-view', compact('category', 'products'));
        } else {
            return view('catalog', compact('category'));
        }
    }

    public function lead(Request $request)
    {
        //dd($request->all());
    }
}
