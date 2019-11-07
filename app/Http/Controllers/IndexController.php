<?php

namespace App\Http\Controllers;

use App\Category;
use App\Page;
use App\Product;
use App\User;
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
            if (!empty($product->depth)) $p_title .= ", Толщина: ".$product->depth;
            if (!empty($product->diameter)) $p_title .= ", Ширина: ".$product->diameter;
            if (!empty($product->gost)) $p_title .= ", ГОСТ: ".$product->gost;
            if (!empty($product->mark)) $p_title .= ", Марка: ".$product->mark;
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
//        $to = 'info@metaloprokat.kz' . ', ';
//        $to .= 'kairat_ubukulov@mail.ru';
        $subject = 'Новая заявка';
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        $headers .= "From: <order@metaloprokat.kz>\r\n";
        mail($to, $subject, $message, $headers);
        return redirect()->back();
    }

    public function createUser()
    {
        User::create([
            'name' => 'kairat', 'email' => '2504794@mail.ru', 'password' => bcrypt('kair_m888'), 'type' => 'admin'
        ]);
        echo "OK";
    }

    public function page($alias)
    {
        $page = Page::whereAlias($alias)->first();
        return view('page', compact('page'));
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $max_page = 20;
        $results = $this->look($q, $max_page);
        return view('search', compact('results', 'q'));
    }

    /**
     * Полнотекстовый поиск.
     *
     * @param string $q Строка содержащая поисковый запрос. Может быть несколько фраз разделенных пробелом.
     * @param integer $count Количество найденных результатов выводимых на одной странице (для пагинации)
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
    public function look ($q, $count){
        $query = mb_strtolower($q, 'UTF-8');
        $arr = explode(" ", $query); //разбивает строку на массив по разделителю
        /*
         * Для каждого элемента массива (или только для одного) добавляет в конце звездочку,
         * что позволяет включить в поиск слова с любым окончанием.
         * Длинные фразы, функция mb_substr() обрезает на 1-3 символа.
         */
        $query = [];
        foreach ($arr as $word)
        {
            $len = mb_strlen($word, 'UTF-8');
            switch (true)
            {
                case ($len <= 3):
                {
                    $query[] = $word . "*";
                    break;
                }
                case ($len > 3 && $len <= 6):
                {
                    $query[] = mb_substr($word, 0, -1, 'UTF-8') . "*";
                    break;
                }
                case ($len > 6 && $len <= 9):
                {
                    $query[] = mb_substr($word, 0, -2, 'UTF-8') . "*";
                    break;
                }
                case ($len > 9):
                {
                    $query[] = mb_substr($word, 0, -3, 'UTF-8') . "*";
                    break;
                }
                default:
                {
                    break;
                }
            }
        }
        $query = array_unique($query, SORT_STRING);
        $qQeury = implode(" ", $query); //объединяет массив в строку
        // Таблица для поиска
        $results = Category::whereRaw(
            "MATCH(title,short_description) AGAINST(? IN BOOLEAN MODE)", // name,email - поля, по которым нужно искать
            $qQeury)->paginate($count) ;
        return $results;
    }
}
