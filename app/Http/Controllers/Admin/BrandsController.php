<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use App\Models\Category;
use App\Models\ProductBrands;
use App\Http\Requests\Brands\AddRequest;
use RealRashid\SweetAlert\Facades\Aler;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::all();
        return view('admin.pages.brands.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.pages.brands.add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
         //upload ảnh thương hiệu brands  
         if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }
        $request->merge(['logo'=>$file_name]);


        $brands = Brands::create($request->all());
        if($brands){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('brands.index')->with('red','thêm mới thành công !');
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
        $category = Category::all();
        $brands = Brands::find($id);
        return view('admin.pages.brands.edit',compact('brands','category'));
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
        
        //sửa ảnh thương hiệu 
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }else{
            $file_name = $category->logo;
        }

        $request->merge(['logo'=>$file_name]);

        $brands = Brands::find($id)->update($request->all());
        if($brands){
            alert()->success('Title','Sửa Thành công');
            return redirect()->route('brands.index')->with('blue','sửa  thành công !');
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
        ProductBrands::where('brands_id',$id)->delete();
        $brands = Brands::find($id)->delete();
        alert()->success('Title','Xóa Thành công');
        return redirect()->route('brands.index')->with('white','xóa tahnhf công !');
    }

        
    //tìm kiếm theo tên thương hiệu 
    public function search(Request $request,Brands $brands){
        $brands = Brands::where('name','like','%'.$request->key.'%')->orwhere('status',$request->key)->get();
        return view('admin.pages.brands.list',compact('brands'));
    }



}
