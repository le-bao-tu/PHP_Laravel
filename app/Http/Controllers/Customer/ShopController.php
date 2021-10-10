<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brands;
use App\Models\Product;
use App\Models\Color;
use App\Models\Classify;
use App\Models\ProductColor;
use App\Models\Wish_list;
use DB;
class ShopController extends Controller
{
    
    //lấy sản phẩm theo danh mục 
    public function shop(Category $category,$id, Product $product,Color $color,Wish_list $wish_list){
        $list_cate = $category->getlist();
        
        $list_product = $product->getCategory($id);

        $list_brands = $product->brandsCate($id);
        $list_classifys = $product->classifyCate($id);
        $list_color = $color->getcolor();
        $category = Product::paginate(15);
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');

         //sắp xếp 
         if(isset($_GET['sort_bys'])){
            $sort_by = $_GET['sort_bys'];
            if($sort_by =='giam_dan'){
                $list_product = Product::orderBy('sale_price','DESC')->paginate(15);
            }elseif($sort_by =='tang_dan'){
                $list_product = Product::orderBy('sale_price','ASC')->paginate(15);
            }elseif($sort_by =='kytu_az'){
                $list_product = Product::orderBy('name','DESC')->paginate(15);
            }elseif($sort_by =='ky_tu_za'){
                $list_product = Product::orderBy('name','ASC')->paginate(15);
            }
        }

        //tìm sản phẩm theo mức gia
        if(isset($_GET['prices'])){
            $price = $_GET['prices'];
            if($price == '1'){
                $list_product = Product::where('sale_price','<',100)->get();
            }elseif($price == '2'){
                $list_product = Product::whereBetween('sale_price',[100,300])->get();
            }elseif($price == '3'){
                $list_product = Product::whereBetween('sale_price',[300,500])->get();
            }elseif($price == '4'){
                $list_product = Product::whereBetween('sale_price',[500,700])->get();
            }elseif($price == '5'){
                $list_product = Product::whereBetween('sale_price',[700,1000])->get();
            }elseif($price == '6'){
                $list_product = Product::where('sale_price','>',1000)->get();
            }
        }

        return view('customer.pages.shop',compact('wish_list','list_product','list_cate','list_brands','list_classifys','list_color','category'));
    }


    //lấy sản phẩm theo thương hiệu của danh mục đó 
    public function shop_brands(Category $category,Product $product,Color $color,$id,Brands $Brands,Wish_list $wish_list){
     
        $test = Brands::find($id);
        $cate = Category::where('id',$test->category_id)->first();
        
        $list_brands = Brands::where('category_id',$cate->id)->get();
        $list_classifys =  Classify::where('category_id',$cate->id)->get();


        $list_product = $product->getBrands($id);
        $list_cate = $category->getlist();
        $list_color = $color->getcolor();
        $category = Product::paginate(15);
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        return view('customer.pages.shop',compact('wish_list','list_cate','list_product','list_brands','list_classifys','list_color','category'));
    }


    //lấy sản phẩm theo phân loại của danh mục đó 
    public function shop_classify(Category $category,Product $product,Color $color,$id, Classify $classify,Wish_list $wish_list){
        $test = Classify::find($id);
        $cate = Category::where('id',$test->category_id)->first();
        $list_brands = Brands::where('category_id',$cate->id)->get();
        $list_classifys =  Classify::where('category_id',$cate->id)->get();


        $list_product = $product->getClassify($id);
        $list_cate = $category->getlist();
        $list_color = $color->getcolor();
        $category = Product::paginate(15);
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        return view('customer.pages.shop',compact('wish_list','list_cate','list_product','list_brands','list_classifys','list_color','category'));
    }

     //lấy sản phẩm theo màu của danh mục đó 
     public function shop_color(Category $category,Product $product,Color $color,$id, Classify $classify,Brands $brands,Wish_list $wish_list){
        $list_cate = $category->getlist();
        $list_product = $product->getColor($id);
        $list_brands = $brands->getbrands();
        $list_classifys = $classify->getclassify($id);
        $list_color = $color->getcolor();
        $category = Product::paginate(15);
        $wish_list = DB::table('products')->join('wish_lists','products.id','=','wish_lists.product_id')
        ->get()->unique('product_id');
        return view('customer.pages.shop',compact('wish_list','list_cate','list_brands','list_classifys','list_color','category','list_product'));
    }

    

}
