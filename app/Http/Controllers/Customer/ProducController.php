<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brands;
use App\Models\Classify;
use App\Models\Color;
use App\Models\Wish_list;
use DB;


class ProducController extends Controller
{
    public function product(Request $request, Brands $brands,Classify $classify,Color $color,Product $product,Category $category,Wish_list $wish_list){
        $list_cate = $category->getlist();
        $list_brands = $brands->getbrands();
        $list_classify = $classify->getclassify();
        $list_color = $color->getcolor();
        $top_product = $product->topPro();
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        $category = Product::paginate(15);
        
       
        //sắp xếp 
        if(isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if($sort_by =='giam_dan'){
                $top_product = Product::orderBy('sale_price','DESC')->paginate(15);
            }elseif($sort_by =='tang_dan'){
                $top_product = Product::orderBy('sale_price','ASC')->paginate(15);
            }elseif($sort_by =='kytu_az'){
                $top_product = Product::orderBy('id','DESC')->paginate(15);
            }elseif($sort_by =='ky_tu_za'){
                $top_product = Product::orderBy('id','ASC')->paginate(15);
            }
        }

        
        //xem theo khoảng gia
        if(isset($_GET['price'])){
            $price = $_GET['price'];
            if($price == '1'){
                $top_product = Product::where('sale_price','<',100)->paginate(15);
                // dd($top_product);
            }elseif($price == '2'){
                $top_product = Product::whereBetween('sale_price',[100,300])->paginate(15);
            }elseif($price == '3'){
                $top_product = Product::whereBetween('sale_price',[300,500])->paginate(15);
            }elseif($price == '4'){
                $top_product = Product::whereBetween('sale_price',[500,700])->paginate(15);
            }elseif($price == '5'){
                $top_product = Product::whereBetween('sale_price',[700,1000])->paginate(15);
            }elseif($price == '6'){
                $top_product = Product::where('sale_price','>',1000)->paginate(15);
            }
        }

     
        return view('customer.pages.product',compact('wish_list','list_brands','list_classify','list_color','category','top_product','list_cate'));
    }

    //xem sản phẩm theo thương hiệu 
    public function product_brands(Wish_list $wish_list,Product $product,Classify $classify,Color $color,Brands $brands,Category $category,$id){
        $list_cate = $category->getlist();
        $list_brands = $brands->getbrands();
        $list_classify = $classify->getclassify();
        $list_color = $color->getcolor();
        
        $top_product = $product->getProductbrands($id);

        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        $category = Product::paginate(15);
        return view('customer.pages.product',compact('wish_list','top_product','list_brands','list_classify','category','list_color','list_cate'));
    }
    
    //xem sản phẩm theo phân loại 
    public function product_classify(Wish_list $wish_list, Product $product,Classify $classify,Color $color,Brands $brands,Category $category, $id){
        $list_cate = $category->getlist();
        $list_brands = $brands->getbrands();
        $list_classify = $classify->getclassify();
        $list_color = $color->getcolor();

        $top_product = $product->getProductclassify($id);

        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        $category = Product::paginate(15);
        return view('customer.pages.product',compact('wish_list','top_product','list_brands','list_classify','category','list_color','list_cate'));
    }


    //xem sản phẩm theo màu 
    public function product_color(Wish_list $wish_list,Product $product,Classify $classify,Color $color,Brands $brands,Category $category, $id){
        $list_cate = $category->getlist();
        $list_brands = $brands->getbrands();
        $list_classify = $classify->getclassify();
        $list_color = $color->getcolor();

        $top_product = $product->getProductcolor($id);

        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        $category = Product::paginate(15);
       
        return view('customer.pages.product',compact('wish_list','top_product','list_brands','list_classify','category','list_color','list_cate'));
    }
    
    //search 
    public function search(Wish_list $wish_list,Request $request,Product $product,Brands $brands,Classify $classify,Color $color,Category $category){
        $list_cate = $category->getlist();
        $list_brands = $brands->getbrands();
        $list_classify = $classify->getclassify();
        $list_color = $color->getcolor();
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');

        $top_product =  Product::where('name','like','%'.$request->key.'%')->orwhere('price',$request->key)->orwhere('sale_price',$request->key)->get();
        $category = Product::paginate(15);
        return view('customer.pages.product',compact('wish_list','list_brands','list_classify','list_color','category','top_product','list_cate'));
    }

    //yeu thich 


    //sản phẩm đã bán
     
  

}
