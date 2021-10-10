<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classify;
use App\Models\Category;
use App\Models\Product;
use App\Models\ImageProduct;
use App\Http\Requests\Classify\AddRequest;
use RealRashid\SweetAlert\Facades\Aler;


class ClassifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classify = Classify::all();
        return view('admin.pages.classify.list',compact('classify'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.classify.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {   
        
        Classify::create($request->all());
        alert()->success('Title','Thêm mới màu Thành công');
        return redirect()->route('classify.index')->with('red','thêm mới màu thành công');
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
        $category = Category::all();
        $classify = Classify::find($id);
        return view('admin.pages.classify.edit',compact('classify','category'));
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
        Classify::find($id)->update($request->all());
        return redirect()->route('classify.index')->with('blue','Sửa màu thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageProduct::where('product_id',$id)->delete();
        Product::where('classify_id',$id)->delete();
        Classify::find($id)->delete();
        alert()->success('Title','Xóa màu Thành công');
        return redirect()->route('classify.index')->with('white','Xóa màu thành công');
    }
}
