<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$file_array = file(public_path()."/files/1.txt");
        for ($i=0; $i < count($file_array); $i++) {
            $arr = explode("|", rtrim(rtrim($file_array[$i], "\r\n"), "|"));
            $slug_title = "";
            if (!empty($arr[0])) $slug_title .= $arr[0]." ";
            if (!empty($arr[1])) $slug_title .= $arr[1]." ";
            if (!empty($arr[2])) $slug_title .= $arr[2]." ";
            if (!empty($arr[3])) $slug_title .= $arr[3]." ";
//            if (!empty($arr[4])) $slug_title .= $arr[4]." ";
//            if (!empty($arr[5])) $slug_title .= $arr[5]." ";
//            if (!empty($arr[6])) $slug_title .= $arr[5]." ";
            $slug = Str::slug(rtrim($slug_title, " "),"-");
            Product::create([
                'title' => $arr[0],
                'alias' => $slug,
                'category_id' => 189,
//                'wall1' => $arr[1],
//                'wall2' => $arr[2],
//                'width' => $arr[3],
//                'height' => $arr[2],
//                'length' => $arr[3],
//                'jumper' => $arr[3], // Перемычка
//                'diameter' => $arr[1],
//                'diameter_vn' => $arr[2],
//                'diameter_vn2' => $arr[3],
//                'buxta' => $arr[3],
//                'step' => $arr[3],
//                'quantity' => $arr[3],
//                'skrutka' => $arr[2],
                'frak' => $arr[1],
//                'cross_section' => $arr[1], // сечение жил
//                'rated_voltage' => $arr[3], // номинальные напряжение
                //'depth' => $arr[1],
//                'size' => $arr[1],
//                'size2' => $arr[2],
//                'size3' => $arr[3],
                'gost' => $arr[2],
                'mark' => $arr[3],
//                'description' => $arr[4],
            ]);
        }*/
        $products = Product::paginate(30);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get()->toTree();
        return view('admin.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $slug_title = "";
        if (!empty($data['title'])) $slug_title .= $data['title']." ";
        if (!empty($data['depth'])) $slug_title .= $data['depth']." ";
        if (!empty($data['diameter'])) $slug_title .= $data['diameter']." ";
        if (!empty($data['gost'])) $slug_title .= $data['gost']." ";
        if (!empty($data['mark'])) $slug_title .= $data['mark']." ";
        $data['alias'] = Str::slug(rtrim($slug_title, " "),"-");
        Product::create([
            'title' => rtrim($data['title'], " "),
            'alias' => $data['alias'],
            'category_id' => $data['category_id'],
            'diameter' => rtrim($data['diameter'], " "),
            'depth' => rtrim($data['depth'], " "),
            'gost' => rtrim($data['gost'], " "),
            'mark' => rtrim($data['mark'], " "),
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
