<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Mailstores;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Web\ProductDetailsController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\CheckoutController;
use App\Http\Controllers\web\OrderDetailsController;
use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DemoController;
use App\Http\Controllers\Admin\ScoController;
use App\Http\Controllers\tech\TechController;
use App\Http\Controllers\Admin\TechadminController;

// use App\Http\Controllers\Admin\Website;
// use App\Http\Controllers\web\Website;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'admin', 'web'], function () {
    //  Route::get('admin/brand/mail1', function () {Mail::to('@gmail.com')->send(new SendMail($data));});

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    Route::get('admin/admin/list', [AdminController::class, 'admin_list']);
    Route::get('admin/admin/add', [AdminController::class, 'admin_add']);
    Route::post('admin/admin/add', [AdminController::class, 'add_admin_insert']);
    Route::get('admin/admin/edit/{id}', [AdminController::class, 'add_admin_edit']);
    Route::post('admin/admin/edit/{id}', [AdminController::class, 'admin_add_update']);
    Route::get('admin/admin/delete/{id}', [AdminController::class, 'admin_add_delete']);

    Route::get('admin/category/list', [CategoryController::class, 'category_list']);
    Route::get('admin/category/add', [CategoryController::class, 'category_add']);
    Route::post('admin/category/add', [CategoryController::class, 'category_insert']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'category_edit']);
    Route::post('admin/category/edit/{id}', [CategoryController::class, 'category_update']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'category_delete']);


    Route::get('admin/brand/add', [MailController::class, 'brand_add'])->name('add-new');
    Route::post('admin/brand/add', [MailController::class, 'store']);
    Route::get('admin/brand/list', [MailController::class, 'list'])->name('brand-list');
    Route::get('admin/brand/edit/{id}', [MailController::class, 'brand_edit'])->name('edit-brand');
    Route::post('admin/brand/edit/{id}', [MailController::class, 'brand_update']);
    Route::get('admin/brand/delete/{id}', [MailController::class, 'brand_delete'])->name('delete-brand');
    Route::get('admin/maillist', [MailController::class, 'maillist']);
    Route::get('admin/brand/deletemail/{id}', [MailController::class, 'deletemail']);
    Route::get('admin/franchiselist', [FranchiseController::class, 'list'])->name('franchiselist');
    Route::get('admin/franchise/delete/{id}', [FranchiseController::class, 'delete']);



    // Route::get('admin/brand/mail/{arg1}/{arg2}', [BrandController::class, 'mail']);




    Route::resource('admin/products', ProductController::class);

    Route::get('admin/allOrders', [OrdersController::class, 'listOrders'])->name('list-orders');
    Route::patch('/orders/{orderId}/update-status', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::delete('/orders/{orderId}', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::get('admin/orders/{orderId}/invoice', [OrdersController::class, 'generateInvoice'])->name('orders.generateInvoice');
    Route::resource('admin/gallery', GalleryController::class);
    // Route::get('mail1', [Website::class, 'mail']);
    Route::get('admin/blog/list', [BlogController::class, 'list'])->name('blog-list');
    Route::get('admin/logo/logo', [BlogController::class, 'logo'])->name('blog-logo');

    Route::get('admin/addblog/add', [BlogController::class, 'blog_add'])->name('add-blog');
    Route::post('admin/addblog/add', [BlogController::class, 'create_blog'])->name('create-blog');
    Route::post('admin/addlogo/logo', [BlogController::class, 'create_logo'])->name('create-logo');
    Route::get('admin/logo/delete/{id}', [BlogController::class, 'gallery_delete'])->name('delete-brand');
    Route::get('admin/brand/delete/{id}', [BlogController::class, 'delete'])->name('delete-brand');
    Route::get('admin/blog/edit/{id}', [BlogController::class, 'blog_edit']);
    Route::post('admin/blog/edit/{id}', [BlogController::class, 'blog_update'])->name('update-brand');
    Route::get('add-blogcontent/{id}', [BlogController::class, 'content_add'])->name('add-blogcontent');
    Route::post('admin/addcontentblog/add', [BlogController::class, 'create_content_blog'])->name('create-content-blog');
    Route::get('view-blogcontent/{id}', [BlogController::class, 'content_view'])->name('view-blogcontent');
    Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
    // routes/web.php or routes/api.php
    Route::post('/upload-image', [BlogController::class, 'uploadImage'])->name('upload.image.route');
    Route::get('/content_add1', function () {
        return view('editor');
    });
    Route::get('/editor', [BlogController::class, 'content_add1']);
    // routes/web.php
    Route::post('ckeditor/upload', [BlogController::class, 'upload'])->name('ckeditor.upload');
    Route::get('admin/contentblog/edit/{id}', [BlogController::class, 'content_edit']);
    Route::post('admin/updateblog/edit/{id}', [BlogController::class, 'create_content_update_blog'])->name('update-content');
    Route::get('admin/alex', [BlogController::class, 'demo']);
    Route::post('/upload-images', [DemoController::class, 'upload'])->name('upload.images');
    Route::post('image/upload/store', [DemoController::class, 'fileStore']);
    Route::post('/image/remove', 'DemoController@fileRemove')->name('file.remove');
    // routes/web.php or routes/web/web.php (depending on your Laravel version)


    Route::post('upload-multiple', [BlogController::class, 'uploadMultiple']);
    Route::get('fetch-images', [BlogController::class, 'fetchImages'])->name('fetch.images');
    //   Route::delete('delete-image/{filename}', [BlogController::class, 'deleteImage'])->name('delete.image');
    Route::delete('/delete-image/{id}', [BlogController::class, 'deleteimage']);
    //   SCO link
    Route::get('admin/seo/seolist', [ScoController::class, 'scolist'])->name('sco-list');
    Route::post('admin/seo/addlink', [ScoController::class, 'create_link'])->name('create-link');
    Route::get('admin/seo/delete/{id}', [ScoController::class, 'link_delete']);
    Route::get('admin/link/edit/{id}', [ScoController::class, 'link_edit']);
    Route::post('admin/link/edit/{id}', [ScoController::class, 'link_update'])->name('update-link');
    //   SCO home
    Route::get('admin/home/homelist', [ScoController::class, 'homelist'])->name('home-list');
    Route::post('admin/home/addhome', [ScoController::class, 'create_home'])->name('create-home');
    Route::get('admin/home/delete/{id}', [ScoController::class, 'home_delete']);
    Route::get('admin/home/edit/{id}', [ScoController::class, 'home_edit']);
    Route::post('admin/home/edit/{id}', [ScoController::class, 'home_update'])->name('home-update');
    //   SCO About
    Route::get('admin/about/aboutlist', [ScoController::class, 'aboutlist'])->name('about-list');
    Route::post('admin/about/addabout', [ScoController::class, 'create_about'])->name('create-about');
    Route::get('admin/about/delete/{id}', [ScoController::class, 'about_delete']);
    Route::get('admin/about/edit/{id}', [ScoController::class, 'about_edit']);
    Route::post('admin/about/edit/{id}', [ScoController::class, 'about_update'])->name('about-update');
    //   SCO service
    Route::get('admin/service/servicelist', [ScoController::class, 'servicelist'])->name('service-list');
    Route::post('admin/service/addservice', [ScoController::class, 'create_service'])->name('create-service');
    Route::get('admin/service/delete/{id}', [ScoController::class, 'service_delete']);
    Route::get('admin/service/edit/{id}', [ScoController::class, 'service_edit']);
    Route::post('admin/service/edit/{id}', [ScoController::class, 'service_update'])->name('service-update');
    //   SCO contact
    Route::get('admin/contact/contactlist', [ScoController::class, 'contactlist'])->name('contact-list');
    Route::post('admin/contact/addcontact', [ScoController::class, 'create_contact'])->name('create-contact');
    Route::get('admin/contact/delete/{id}', [ScoController::class, 'contact_delete']);
    Route::get('admin/contact/edit/{id}', [ScoController::class, 'contact_edit']);
    Route::post('admin/contact/edit/{id}', [ScoController::class, 'contact_update'])->name('contact-update');
    //   SCO blog
    Route::get('admin/blogseo/bloglist', [ScoController::class, 'bloglist'])->name('blogsco-list');
    Route::post('admin/blogseo/addblog', [ScoController::class, 'create_blogsco'])->name('create-blogsco');
    Route::get('admin/blogseo/delete/{id}', [ScoController::class, 'blogsco_delete']);
    Route::get('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_edit']);
    Route::post('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_update'])->name('blogsco-update');

    Route::post('admin/sco/edit/{id}', [ScoController::class, 'sco_update'])->name('sco-update');
    Route::get('view_blogcontent/{id}', [ScoController::class, 'view_blogcontent'])->name('view_blogcontent');
    //   SCO content blog
    Route::get('admin/scoblog/scobloglist', [ScoController::class, 'scobloglist'])->name('scoblog-list');
    Route::post('admin/scoblog/addscoblog', [ScoController::class, 'create_scoblog'])->name('create-scoblog');
    Route::get('admin/scoblog/delete/{id}', [ScoController::class, 'scoblog_delete']);
    Route::get('admin/scoblog/edit/{id}', [ScoController::class, 'edit_scoblog']);
    Route::post('admin/scoblog/edit/{id}', [ScoController::class, 'scoblog_update'])->name('scoblog-update');
    //   SCO work
    Route::get('admin/work/worklist', [ScoController::class, 'worklist'])->name('work-list');
    Route::post('admin/work/addwork', [ScoController::class, 'create_work'])->name('create-work');
    Route::get('admin/work/delete/{id}', [ScoController::class, 'work_delete']);
    Route::get('admin/work/edit/{id}', [ScoController::class, 'work_edit']);
    Route::post('admin/work/edit/{id}', [ScoController::class, 'work_update'])->name('work-update');
    //SCO work find id page
    Route::get('admin/solo/solowork', [ScoController::class, 'soloworklist'])->name('solowork-list');
    Route::post('admin/solo/solowork', [ScoController::class, 'solowork_work'])->name('create-solowork');
    Route::get('admin/solowork/delete/{id}', [ScoController::class, 'solowork_delete']);
    Route::get('admin/solowork/edit/{id}', [ScoController::class, 'solowork_edit']);
    Route::post('admin/solowork/edit/{id}', [ScoController::class, 'solowork_update'])->name('solowork-update');
    //SCO blog page find id page
    Route::get('admin/oneblog/onebloglist', [ScoController::class, 'onebloglist'])->name('oneblog-list');
    Route::post('admin/oneblog/onebloglist', [ScoController::class, 'create_oneblog'])->name('create-oneblog');
    Route::get('admin/oneblog/delete/{id}', [ScoController::class, 'oneblog_delete']);
    Route::get('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_edit']);
    Route::post('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_update'])->name('oneblog-update');
    Route::post('/check-slug-availability', [ScoController::class, 'checkSlugAvailability']);
    Route::post('/validate-slug', 'ScoController@validateSlug')->name('validate-slug');





    //Add service
Route::get('admin/addservice/list', [TechadminController::class, 'service_list'])->name('ser-list');
Route::post('admin/addservice/add', [TechadminController::class, 'service_add'])->name('add-service1');

Route::get('admin/addservice/edit/{id}', [TechadminController::class, 'edit']);
Route::post('admin/addservice/update/{id}', [TechadminController::class, 'service_update'])->name('updateservice');

Route::get('admin/addservice/delete/{id}', [TechadminController::class, 'admin_add_delete']);

//Add Teams
Route::get('admin/addteams/list', [TechadminController::class, 'team_list'])->name('ser-list');
Route::post('admin/addteams/add', [TechadminController::class, 'team_add'])->name('add-team');

Route::get('admin/addteams/edit/{id}', [TechadminController::class, 'teamsedit']);
Route::post('admin/addteams/update/{id}', [TechadminController::class, 'teams_update'])->name('updateteams');

Route::get('admin/addteams/delete/{id}', [TechadminController::class, 'teamdelete']);


//Add client
Route::get('admin/client/list', [TechadminController::class, 'client_list'])->name('ser-list');
Route::post('admin/client/add', [TechadminController::class, 'client_add'])->name('add-client');
Route::post('admin/client/test', [TechadminController::class, 'test_add'])->name('add-test');
Route::get('admin/client/edit/{id}', [TechadminController::class, 'clientedit']);
Route::post('admin/client/update/{id}', [TechadminController::class, 'client_update'])->name('updateclient');

Route::get('admin/addclient/deleteclient/{id}', [TechadminController::class, 'deleteclient']);

Route::get('admin/test/delete/{id}', [TechadminController::class, 'testdelete']);
   //   event blog
   Route::get('admin/event/eventlist', [TechadminController::class, 'bloglist'])->name('blogsco-list');
   Route::post('admin/events/eventlists', [TechadminController::class, 'create_blogsco'])->name('create-event');
   Route::get('admin/eve/delete/{id}', [TechadminController::class, 'event_delete']);
   Route::get('admin/eventedit/edit/{id}', [TechadminController::class, 'event_edit']);
   Route::post('admin/eventupdate/edit/{id}', [TechadminController::class, 'event_update'])->name('event-update');

//add contact
Route::get('admin/addcontact/list', [TechadminController::class, 'contact_list'])->name('addcontact-list');
Route::post('admin/addcontact/add', [TechadminController::class, 'contact_add'])->name('add-contact');

Route::get('admin/addcontact/edit/{id}', [TechadminController::class, 'contactedit']);
Route::post('admin/addcontact/update/{id}', [TechadminController::class, 'contact_update'])->name('updatecontact');

Route::get('admin/addcontact/delete/{id}', [TechadminController::class, 'contactdelete']);
//resource
Route::get('admin/resource/list', [TechadminController::class, 'resourcelist'])->name('resource-list');
Route::post('admin/resource/list', [TechadminController::class, 'create_resource'])->name('create-resource');
Route::get('admin/resource/delete/{id}', [TechadminController::class, 'resource_delete']);
Route::get('admin/resourceedit/edit/{id}', [TechadminController::class, 'resource_edit']);
Route::post('admin/resourceupdate/edit/{id}', [TechadminController::class, 'resource_update'])->name('resource-update');

//Add Design and logo
Route::get('admin/design/list', [TechadminController::class, 'logo_list'])->name('logo-list');
Route::post('admin/design/add', [TechadminController::class, 'logo_add'])->name('add-logo');

Route::get('admin/design/edit/{id}', [TechadminController::class, 'logoedit']);


Route::get('admin/design/deletelogo/{id}', [TechadminController::class, 'deletelogo']);

});


Route::get('admin', [AuthController::class, 'login']);
Route::post('admin', [AuthController::class, 'auth_login_admin']);
Route::get('admin/logout', [AuthController::class, 'logout_admin']);


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('cart-items', [PageController::class, 'cart'])->name('cart-items');
Route::get('/product/{productId}', [PageController::class, 'productDetails'])->name('product-details');

//terms and conditions
Route::get('refund-policy', [PageController::class, 'refundPolicy'])->name('refund-policy');
Route::get('terms', [PageController::class, 'terms'])->name('terms');
Route::get('privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('shipping', [PageController::class, 'shipping'])->name('shipping');
Route::get('gallery', [PageController::class, 'gallery'])->name('gallery');

//Promotional Page
Route::get('naattulife', [PageController::class, 'promotion'])->name('promotion');

Route::middleware(['guest'])->group(function () {
    Route::get('login', [PageController::class, 'login'])->name('login');
    Route::post('login_submit', [LoginController::class, 'submit'])->name('login_post');

    Route::get('register', [PageController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'store']);
});


Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/model/{productId}', [ProductDetailsController::class, 'getProductDetails']);

Route::middleware(['web'])->group(function () {
    Route::get('/cart/{productId}', [CartController::class, 'addToCart']);
    Route::get('/cart', [CartController::class, 'cartList'])->name('cart.index');
    Route::get('/deleteCartItem/{id}', [CartController::class, 'deleteCartItem'])->name('delete-cart');
    Route::post('/updateCartItem/{itemId}', [CartController::class, 'updateCartItem']);
});


//checkout_process
Route::get('/checkout/{id}', [PageController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place-order');
Route::post('razorpay-payment', [CheckoutController::class, 'store'])->name('razorpay.payment.store');

//orders

Route::get('my-orders', [OrderDetailsController::class, 'myOrders'])->name('my-orders');




Route::get('/', [TechController::class, 'home']);
Route::get('/about', [TechController::class, 'about']);
Route::get('/service', [TechController::class, 'service']);
Route::get('/team', [TechController::class, 'team']);
Route::get('/client', [TechController::class, 'client']);
Route::get('/event', [TechController::class, 'event']);
Route::get('/resource', [TechController::class, 'resource']);
Route::get('/contact', [TechController::class, 'contact']);
Route::post('/send-message', function(Request $request) {
    // Handle the form submission here
    // Create a new Mailstores instance with the validated data
    $mailstore = new Mailstores([
        'name' => $request->name,
        'phone' =>$request->msg,
        'msg' => $request->phone,
    ]);

    $mailstore->save();

    return redirect('/contact')->with('success', ' message sent successfully');

})->name('send.message');
Route::get('/singleevent/{id}', [TechController::class, 'singleevent'])->name('singleevent');
// Route::get('/singleevent/{id}', [TechController::class, 'singleevent'])->name('singleevent');
Route::get('/singleresource/{id}', [TechController::class, 'singleresource']);
Route::get('/header', [TechController::class, 'get_logo1']);
   