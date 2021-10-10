<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brands;
use App\Models\Product;
use App\Models\Color;
use App\Models\Classify;
use App\Models\ProductColor;
use App\Models\ProductBrands;
use App\Models\OrderDetail;
use App\Models\ImageProduct;
use App\Models\Comment;
use App\Http\Requests\Product\AddRequest;
use RealRashid\SweetAlert\Facades\Aler;
use DB;
use Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $product = Product::paginate(20);
        
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by =='giam_dan'){
                $product = Product::orderBy('price','DESC')->paginate();
            }elseif($sort_by =='tang_dan'){
                $product = Product::orderBy('price','ASC')->paginate();
            }elseif($sort_by =='kytu_az'){
                $product = Product::orderBy('name','DESC')->paginate();
            }elseif($sort_by =='ky_tu_za'){
                $product = Product::orderBy('name','ASC')->paginate();
            }
        }
        
        return view ('admin.pages.product.list',compact('product'));
    }


    //search sản phẩm 
    public function search_product(Request $request,Product $product){
        $product = Product::where('name','like','%'.$request->key.'%')->orwhere('price',$request->key)->orwhere('sale_price',$request->key)->get();
        return view('admin.pages.product.list',compact('product'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $color = Color::all();
        $brands = Brands::all();
        $classify = Classify::all();
        return view('admin.pages.product.add',compact('category','color','brands','classify'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRequest $request)
    {
        // dd($request->all());
        //thêm mới ảnh đại diện
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }

        $request->merge(['image'=>$file_name]);

        $product = Product::create($request->all());

         //upload nhieu anh
         if($product){
            if($request->file('files')){
                foreach($request->file('files') as $files){
                    $file_name = $files->getClientOriginalName();
                    $files->move(public_path('upload/'),$file_name);
                    ImageProduct::create([
                        'image'=>$file_name,
                        'product_id'=>$product->id
                    ]);
                }
            }
            // dd($product->id);

              //Thêm mới màu sản phẩm 
          foreach($request->colors as $color){
            ProductColor::create([
                'product_id'=>$product->id,
                'color_id'=>$color
            ]);
        }


        //thêm mới thương hiệu sản phẩm 
            ProductBrands::create([
                'product_id'=>$product->id,
                'brands_id'=> $request->brands_id
            ]);
        

        alert()->success('Title','Thêm mới Thành công');
        return redirect()->route('product.index')->with('red','thêm mới thành công');
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
        $brands_id = ProductBrands::where('product_id',$id)->pluck('brands_id')->toArray();
        // $classify_id = Classify::where('category_id',$id)->pluck('classify_id')->toArray();
        $color = Color::all();
        $category = Category::all();
        $brands = Brands::all();
        $classify = Classify::all();
        $pro = Product::find($id);
        $img_pro = ImageProduct::where('product_id',$id)->get();
        $color_product = ProductColor::where('product_id',$id)->pluck('color_id')->toArray();
        return view('admin.pages.product.edit',compact('color', 'category', 'brands','pro','color_product','img_pro','brands_id','classify'));
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
        //lấy về id của product trước 
        $pro = Product::find($id);
        //truong hợp sửa ảnh đại diện
        if($request->file('file')){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('upload/'),$file_name);
        }else{
            $file_name = $pro->image;
        }

        
        $request->merge(['image'=>$file_name]);
        $pro = Product::find($id)->update($request->all());


          // trường hợp cập nhật ảnh mô tả
          if($request->file('files')){
            $img_pro = ImageProduct::where('product_id',$id)->delete();

            foreach($request->file('files') as $files){
                $file_name = $files->getClientOriginalName();
                $files->move(public_path('upload/'),$file_name);
                ImageProduct::create([
                    'image'=>$file_name,
                    'product_id'=>$id
                ]);
            }
        }


        //cập nhật màu sắc phẩm
        ProductColor::where('product_id',$id)->delete();
        foreach($request->colors as $color){
            ProductColor::create([
                'product_id'=>$id,
                'color_id'=>$color
            ]);
        }

         //cập nhật thương hiệu sản phẩm
         ProductBrands::where('product_id',$id)->delete();
             ProductColor::create([
                 'product_id'=>$id,
                 'color_id'=>$request->brands_id
             ]);
         

         //chuyển trang
         if($pro){
            alert()->success('Title','Sửa Thành công');
            return redirect()->route('product.index')->with('blue','thêm mới thành công');
        }else{
            return redirect()->back()->with('err','sửa  thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function destroy(Request $request,$id)
    {  
        ImageProduct::where('product_id',$id)->delete();
        ProductColor::where('product_id',$id)->delete();
        ProductBrands::where('product_id',$id)->delete();
        OrderDetail::where('product_id',$id)->delete();
        Comment::where('product_id',$id)->delete();
        $product = Product::find($id)->delete();
        alert()->success('Title','Xóa Thành Công');
        return redirect()->back();
    }

    //tìm kiêm sản phảm 
    // public function product_search(Request $request,Product $product){
    //     $product = Product::where('name','like','%'.$request->key.'%')->orwhere('status',$request->key)->get();
    //     return view('admin.pages.product.list',compact('product'));
    // }







    //lấy danh mục theo thương hiệu 
    public function get_pro_by_brands(Request $request){
        $brands = Brands::where('category_id',$request->category)->get();
        return Response::json($brands);
    }
    

    // lấy danh mục theo phân loại sản phẩm 
    public function get_pro_by_classify(Request $request){
    $classify = Classify::where('category_id',$request->category)->get();
    return Response::json($classify);
    }
}
