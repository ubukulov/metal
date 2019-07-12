<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
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
        $first_name = $request->input('first_name');
        $phone_number = $request->input('phone_number');
        $comments = $request->input('comments');
        $product_id = (int) $request->input('product_id');
        if ($product_id != 0) {
            $product = Product::find($product_id);
            $p_title = $product->title;
            $message = "
            <html>
                <head>
                    <title>Новая заявка</title>
                </head>
                <body>
                   <p>Имя: $first_name</p>
                   <p>Телефон: $phone_number</p>
                   <p>Комментарии: $comments</p>
                   <p>Товар: $p_title</p> 
                </body>
            </html>    
            ";
        } else {
            $message = "
            <html>
                <head>
                    <title>Новая заявка</title>
                </head>
                <body>
                   <p>Имя: $first_name</p>
                   <p>Телефон: $phone_number</p>
                   <p>Комментарии: $comments</p> 
                </body>
            </html>    
            ";
        }
        $to = 'info@metaloprokat.kz';
        $to .= 'kairat_ubukulov@mail.ru';
        $subject = 'Новая заявка';
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        $headers .= "From: Новая заявка <info@metaloprokat.kz>\r\n";
        mail($to, $subject, $message, $headers);
        return redirect()->back();
    }
}
