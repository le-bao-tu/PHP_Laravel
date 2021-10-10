<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog_cate;
use App\Models\Blog;
use App\Http\Requests\BlogCate\AddRequest;

class BlogCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        $blog_cate = Blog_cate::all();
        return view('admin.pages.blog_cate.list',compact('blog_cate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::all();
        return view('admin.pages.blog_cate.add',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        //upload ảnh image blog
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }

        $request->merge(['image'=>$file_name]);


        $blog_cate = Blog_cate::create($request->all());
        if($blog_cate){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('blog-cate.index')->with('red','thêm mới thành công !');
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
        $blog = Blog::all();
        $blog_cate = Blog_cate::find($id);
        return view('admin.pages.blog_cate.edit',compact('blog_cate','blog'));
        
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
        //upload ảnh blog
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }

        $request->merge(['image'=>$file_name]);

        $blog_cate = Blog_cate::find($id)->update($request->all());
        if($blog_cate){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('blog-cate.index')->with('blue','sửa  thành công !');
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
        $blog_cate = Blog_cate::find($id)->delete();
        alert()->success('Title','Xóa Thành công');
        return redirect()->route('blog-cate.index')->with('white','xóa tahnhf công !');
    }
}
