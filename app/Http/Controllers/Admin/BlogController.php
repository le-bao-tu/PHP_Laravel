<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\Blog\AddRequest;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.pages.blog.list',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        //upload ảnh blog
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }

        $request->merge(['image'=>$file_name]);


        $blog = Blog::create($request->all());
        if($blog){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('blog.index')->with('red','thêm mới thành công !');
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
        $blog = Blog::find($id);
        return view('admin.pages.blog.edit',compact('blog'));
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

        $blog = Blog::find($id)->update($request->all());
        if($blog){
            alert()->success('Title','Thêm mới Thành công');
            return redirect()->route('blog.index')->with('blue','sửa  thành công !');
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
        $blog = Blog::find($id)->delete();
        alert()->success('Title','Xóa Thành công');
        return redirect()->route('blog.index')->with('white','xóa tahnhf công !');
    }
}
