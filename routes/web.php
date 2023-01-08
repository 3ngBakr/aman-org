<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\DonateController;
use App\Http\controllers\VolenteerController;
use App\Http\controllers\ContactController;
use App\Http\controllers\NewsController;
use App\Http\controllers\CategorieController;
use App\Http\controllers\Frontend\News_frontendController;
use App\Http\controllers\Servies_NumberController;
use App\Http\controllers\PhotoController;
use App\Http\controllers\GalaryController;
use App\Models\categorie;

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
    return view('user.home');
});

// Route::get('/',[News_frontendController::class,'hero_News']);
Route::get('/categories/{category}',[News_frontendController::class,'getCategoryNews'])->name('categories.news');

// الراوت الخاص بصفحة عنا
// Route::get('/about', function () {
//     return view('user.home',['categories']);
// });


//الراوت الخاص بصفحة تبرع وارسال بيانات الجدول الى قاعدة البيانات الخاصة بها

Route::get('/donate',[DonateController::class,'donate_show']);
Route::post('/upload_do',[DonateController::class,'upload_donate'])->name('store');

//------------------------------------------------------
//الراوت الخاص بصفحة تطوع معنا وارسال البيانات الى قاعدة البيانات الخاصة بالجدول

Route::get('/volenteer',[VolenteerController::class,'show_volenteer']);

Route::post('/upload_vo',[VolenteerController::class,'upload_volenteer'])->name('store_vo');



//--------------------------------------------------------

//------------------------------------------------------
//الراوت الخاص بجدول تواصل بنا وارسال البيانات الى قاعدة البيانات الخاصة بالجدول

Route::post('/upload',[ContactController::class,'upload_contact']);

//------------------------------------------------

//الراوت الخاص بالانتقال لصفحة الاخبار الرئيسية
Route::get('/',[News_frontendController::class,'hero_News'])->name('news_last');

Route::get('/get_news',[News_frontendController::class,'get_News'])->name('get_news');
Route::get('/get_singleNews/{id}',[News_frontendController::class,'get_singleNews'])->name('get_singleNews');






//-----------------------راوت معرض الصور--------------------------
Route::get('/galary',[PhotoController::class,'show'])->name('galary');



//---------------- راوت صفحة عن الجمعية

Route::get('/about', function(){

    $categories = categorie::where('status', '=', 1)->get();
        return view('user.about-page',['categories'=> $categories]);
});




//--------------راوت الامن الغذائي
Route::get('/food',function(){
    $categories = categorie::where('status', '=', 1)->get();
    return view('user.food',['categories'=> $categories]);
});



//--------------راوت التعليم
Route::get('/education',function(){

    $categories = categorie::where('status', '=', 1)->get();
    return view('user.education',['categories'=> $categories]);
});


//--------------راوت الصحة
Route::get('/health',function(){

    $categories = categorie::where('status', '=', 1)->get();
        return view('user.health',['categories'=> $categories]);
});



Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    //donate
    Route::get('/donate_index',[DonateController::class,'donate_index'])->name('donate_index');
    Route::delete('/donate_delet/{id}',[DonateController::class,'destroy'])->name('donate_deledt');
    
    //volnteer
    Route::get('/volnteer_index',[VolenteerController::class,'volnteer_index'])->name('voln_index');
    Route::delete('/volnteer.delet/{id}',[VolenteerController::class,'destroy'])->name('voln_deledt');
   
   //contacts

   Route::get('/contact_index',[ContactController::class,'contact_index'])->name('con_index');
   Route::delete('/contact.delet/{id}',[ContactController::class,'destroy'])->name('con_deledt');
  
   //news
   Route::get('/news',[NewsController::class,'index'])->name('show.new');
   Route::get('/news/create',[NewsController::class,'create'])->name('add_news');
   Route::post('/news',[NewsController::class,'store'])->name('store_news');
   Route::delete('/news.delet/{id}',[NewsController::class,'destroy'])->name('news_deledt');
   Route::get('/news/{id}/edit',[NewsController::class,'edit'])->name('news.edit');
    Route::put('/news/{id}',[NewsController::class,'update'])->name('news_update');
   
    Route::get('/news/status/{id}', [NewsController::class ,'changeStatus']);



    //galary
    Route::get('/admin/galary',[GalaryController::class,'index'])->name('show.galary');
    Route::get('/galary/create',[GalaryController::class,'create'])->name('add_galary');
    Route::post('/galary',[GalaryController::class,'store'])->name('store_galary');
    Route::delete('/galary.delet/{id}',[GalaryController::class,'destroy'])->name('galary_deledt');
    Route::get('/galary/{id}/edit',[GalaryController::class,'edit'])->name('galary.edit');
    Route::put('/galary/{id}',[GalaryController::class,'update'])->name('galary_update');
    Route::get('/galary/status/{id}', [GalaryController::class ,'changeStatus']);



    //categories
    Route::get('/categorie',[CategorieController::class,'index'])->name('show.categorie');
    Route::get('/categorie/create',[CategorieController::class,'create'])->name('add_categorie');
   Route::post('/categorie/store',[CategorieController::class,'store'])->name('store_categorie');
   Route::delete('/categorie.delet/{id}',[CategorieController::class,'destroy'])->name('categorie_deledt');
   Route::get('/categorie/{id}/edit',[CategorieController::class,'edit'])->name('categorie.edit');
    Route::put('/categorie/{id}',[CategorieController::class,'update'])->name('categorie_update');
   
    Route::get('/categorie/status/{id}', [CategorieController::class ,'changeStatus']);


    //servies number
    Route::get('/serviesNumber',[Servies_NumberController::class,'index'])->name('show.number');
    Route::get('/serviesNumber/create',[Servies_NumberController::class,'create'])->name('add_number');
    Route::post('/number/store',[Servies_NumberController::class,'store'])->name('store_number');

    Route::delete('/serviesNumber.delet/{id}',[Servies_NumberController::class,'destroy'])->name('number_deledt');
    Route::get('/serviesNumber/{id}/edit',[Servies_NumberController::class,'edit'])->name('number.edit');
     Route::put('/serviesNumber/{id}',[Servies_NumberController::class,'update'])->name('number_update');
    
   
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';
