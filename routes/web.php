<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ClassifyController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogCateController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\StatisticalController;
//customer 
use App\Http\Controllers\Customer\ProducController;
use App\Http\Controllers\Customer\HomeController;
use App\Http\Controllers\Customer\ShopController;
use App\Http\Controllers\Customer\BlogCusController;
use App\Http\Controllers\Customer\DetailController;
use App\Http\Controllers\Customer\CartController;
use App\Http\Controllers\Customer\WishlistController;
use App\Http\Controllers\Customer\ContactCusController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route Admin 
    Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
        Route::get('/',[DashboardController::class,'index'])->name('admin.index');

        Route::resource('category', CategoryController::class);
        Route::resource('brands', BrandsController::class);
        Route::resource('product', ProductController::class);
        Route::resource('color', ColorController::class);
        Route::resource('classify', ClassifyController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('blog-cate', BlogCateController::class);
 //contact
        Route::get('/contact',[ContactController::class,'contact'])->name('admin.contact');
//xóa contact
         Route::get('/delete-contact/{id}',[ContactController::class,'delete_contact'])->name('delete_contact');
//tìm kiếm  thương hiệu 
       
        Route::get('/search',[BrandsController::class,'search'])->name('search');
//lấy danh mục theo thương hiệu 
        Route::get('/find',[ProductController::class,'get_pro_by_brands'])->name('find_brands');
//lấy danh mục theo phân loại sản phẩm 
        Route::get('/find_classify',[ProductController::class,'get_pro_by_classify'])->name('find_classify');


//route quản lí đơn hàng 
         Route::get('/order',[OrderController::class,'order'])->name('order');
//route cập nhật trạng thái đơn hàng 
         Route::get('/order-detail/{id}',[OrderController::class,'order_detail'])->name('order_detail');
         Route::post('/cap-nhat/{id}',[OrderController::class,'update'])->name('update');
//xóa đơn hàng 
        Route::get('/delete-sp/{id}',[OrderController::class,'delete_sp'])->name('delete_sp');

//route quản lí comment
        Route::get('/comments',[CommentController::class,'comments'])->name('comments');
//cập nhật trạng thái bình luận 
        Route::get('/comments-detail/{id}',[CommentController::class,'comments_detail'])->name('comments_detail');
        Route::post('/comments-detail/{id}',[CommentController::class,'update_comments'])->name('update_comments');
//xóa comment
        Route::get('/delete-comments/{id}',[CommentController::class,'delete_comments'])->name('delete_comments');
// search sản phẩm 
        Route::get('/search-Product',[ProductController::class,'search_product'])->name('search_product');
    });
//route đăng nhập admin
       Route::get('/login',[DashboardController::class,'login'])->name('admin.login');
       Route::post('/login',[DashboardController::class,'post_login'])->name('admin.post_login');
       Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');

    

//route customer 
    Route::group(['prefix'=>'customer'],function(){
        Route::get('/',[HomeController::class,'home'])->name('customer.home');
        Route::get('/product',[ProducController::class,'product'])->name('customer.product');
        Route::get('/product-brands/{id}',[ProducController::class,'product_brands'])->name('customer.product_brands');
        Route::get('/product-classify/{id}',[ProducController::class,'product_classify'])->name('customer.product_classify');
        Route::get('/product-price',[ProducController::class,'product_price'])->name('customer.product_price');
        Route::get('/product-color/{id}',[ProducController::class,'product_color'])->name('customer.product_color');
        
        
        Route::get('/shop/{id}',[ShopController::class,'shop'])->name('customer.shop');
        Route::get('/shop-brands/{id}',[ShopController::class,'shop_brands'])->name('customer.shop_brands');
        Route::get('/shop-classify/{id}',[ShopController::class,'shop_classify'])->name('customer.shop_classify');
        Route::get('/shop-color/{id}',[ShopController::class,'shop_color'])->name('customer.shop_color');
        Route::get('/detail/{id}',[DetailController::class,'detail'])->name('customer.detail');

//comment 
        Route::post('/comment',[DetailController::class,'comment'])->name('comment');
//search 
        Route::get('/search',[ProducController::class,'search'])->name('search');
//blog
        Route::get('/blog',[BlogCusController::class,'blog'])->name('customer.blog');
        Route::get('/blog_cate/{id}',[BlogCusController::class,'blog_id'])->name('customer.blog.id');
//contact
        Route::get('/contact',[ContactCusController::class,'contact'])->name('customer.contact');
        Route::post('/contact',[ContactCusController::class,'post_contact'])->name('customer.post.contact');
//wish list
        Route::get('/add-wishlist/{id}',[WishlistController::class,'add_wish_list'])->name('add_wish_list');
        Route::get('/delete-wishlist/{id}',[WishlistController::class,'delete_wish_list'])->name('delete_wish_list');
 //giỏ hàng 
        Route::get('/show-cart',[CartController::class,'show'])->name('cart.show');
        Route::post('/add-cart',[CartController::class,'add'])->name('add_cart');
        Route::post('/update-cart',[CartController::class,'update_cart'])->name('update_cart');
        Route::get('/delete-sp/{key}',[CartController::class,'delete_sp'])->name('delete_sp');

        Route::get('/check-out',[CartController::class,'check_out'])->name('check_out');
        Route::post('/check-out',[CartController::class,'post_check_out']);

//đăng kí người dùng 
           Route::get('/register',[HomeController::class,'register'])->name('customer.register');
           Route::post('/registers',[HomeController::class,'post_register'])->name('customer.registers');
//Đăng nhập 
           Route::get('/logen',[HomeController::class,'logen'])->name('customer.logen');
           Route::post('/logen',[HomeController::class,'post_logen']);   
           Route::get('/logout',[HomeController::class,'log_out'])->name('customer.log_out');
           

    });

        
     

    