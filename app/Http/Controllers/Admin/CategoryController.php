<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\AddRequest;
use RealRashid\SweetAlert\Facades\Aler;
use App\Models\ProductBrands;
use App\Models\Brands;
use App\Models\Classify;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::All();
        return view('admin.pages.category.list',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        //upload ảnh logo category
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }

        $request->merge(['logo'=>$file_name]);


        $category = Category::create($request->all());
        if($category){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('category.index')->with('red','thêm mới thành công !');
        }else{
            return redirect()->back()->with('err','thêm mới thất bại');
        }
        
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
        $category = Category::find($id);
        return view('admin.pages.category.edit',compact('category'));

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
        //sửa logo category
       
      
        $cate = Category::find($id);
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }else{
            $file_name = $cate->logo;
        }


        $request->merge(['logo'=>$file_name]);
        
        $category = Category::find($id)->update($request->all());
       
        if($category){
            alert()->success('Title','Sửa Thành công');
            return redirect()->route('category.index')->with('blue','sửa  thành công !');
        }else{
            return redirect()->back()->with('err','sửa thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brands::where('category_id',$id)->delete();
        Classify::where('category_id',$id)->delete();
    
        $category = Category::find($id)->delete();
      
        alert()->success('Title','Xóa Thành công');
        return redirect()->route('category.index')->with('white','xóa tahnhf công !');
    }
}
