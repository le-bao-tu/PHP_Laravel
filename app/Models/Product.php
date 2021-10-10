<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class Product extends Model
{
    protected $fillable = ['name','price','sale_price','category_id','classify_id','image','description','status'];
    use HasFactory;

   
//Product

     //join đến bảng category để lấy ra tên danh mục của sp 
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    //join đến bảng classify để lấy ra tên phân loại của sp 
    public function classify(){
        return $this->BelongsTo(Classify::class);
    }
      //join đến bảng brands để lấy ra tên thương hiệu của sp 
    public function brands($id){
      $product = DB::table('product_brands')->join('brands','product_brands.brands_id','=','brands.id')
      ->where('product_brands.product_id',$id)->first();
      return $product;
    }
    
    //lấy ra tất cả sản phẩm 
    public function topPro(){
        $top_product = Product::orderBy('created_at','DESC')->paginate(15);
        return $top_product;
    }


     //lấy ra sản phẩm theo thương hiệu 
     public function getProductbrands($id){
        $product = DB::table('brands')->join('product_brands','brands.id','=','product_brands.brands_id')
        ->where('brands.id',$id)
        ->join('products','products.id','=','product_brands.product_id')
      //   ->select('products.id','products.name','products.price','products.sale_price','products.image','products.status','products.category_id','products.description',)
        ->paginate(15);
        return $product;
    }

   
    
    //lấy sản phẩm theo phân loại 
    public function getProductclassify($id){
      $product = DB::table('classifies')->join('products','products.classify_id','=','classifies.id')->where('products.classify_id',$id)->paginate(15);
        return $product;
    }

     //lấy sản phẩm theo màu  
     public function getProductcolor($id_color){
        $product = DB::table('colors')->join('product_colors','colors.id','=','product_colors.color_id')->where('product_colors.color_id',$id_color)
        ->join('products','products.id','=','product_colors.product_id')->paginate();
        return $product;
     }


   

//trang shop 


     //lấy ra tất cả  sản phẩm theo danh mục 
     public function getCategory($id){
        $product = Product::where('category_id',$id)->orderBy('created_at','DESC')->paginate(15);
        return $product;
     }

     //lấy thương hiệu theo tên danh mục 
     public function brandsCate($id){
        $product = Brands::where('category_id',$id)->orderBy('created_at','DESC')->get();
        return $product;
     }

   

     //lấy phân loại theo tên danh mục 
     public function classifyCate($id){
        $product = Classify::where('category_id',$id)->orderBy('created_at','DESC')->get();
        return $product;
     }


     //lấy sản phẩm theo thương hiệu của danh mục đó
     public function getBrands($id){
        $product = DB::table('brands')->join('product_brands','brands.id','=','product_brands.brands_id')->where('product_brands.brands_id',$id)
        ->join('products','products.id','=','product_brands.product_id')->paginate(15);
        return $product;
     }
     
        //lấy sản phẩm theo phân loại  của danh mục đó
     public function getClassify($id){
        $product = DB::table('classifies')->join('products','products.classify_id','=','classifies.id')->where('products.classify_id',$id)->paginate(15);
        return $product;
     }

     //lấy sản phẩm theo màu
     public function getColor($id){
        $product = DB::table('colors')->join('product_colors','colors.id','=','product_colors.color_id')->where('product_colors.color_id',$id)
        ->join('products','products.id','=','product_colors.product_id')->paginate(15);
        return $product;
     }
    


//detail 

     //lay ra anh mo ta ở detail
    public function img_product(){
        return $this->hasMany(ImageProduct::class);
    }



    
     //lay ra mau ở detail 
     public function getColorById($id){
        $color = DB::table('colors')->join('product_colors','colors.id','=','product_colors.color_id')->where('product_colors.product_id',$id)->get();
        return $color;
    }

   //count sp 

   public function count($id){
      $count = DB::table('products')->join('order_details','products.id','=','order_details.product_id')->where('products.id',$id)->get();
      return $count;
   }
    
   //lấy ra những sản phẩm có status bằng 1 

 
   
   

    

}
