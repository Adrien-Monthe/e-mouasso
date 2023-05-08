<?php

use App\Http\Controllers\BcategoryController;
use App\Http\Controllers\BcommentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BtagController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');

    Route::get('/dash-contact', [App\Http\Controllers\BackendController::class, 'contact'])->name('dash-contact');

    //*********** BLOG ************//

    /** BLOG CATEGORIES */
    Route::resource('bcategories', BcategoryController::class);

    /** BLOG TAGS */
    Route::resource('btags', BtagController::class);

    /** BLOGS */
    Route::resource('blogs', BlogController::class);

    /** BLOGS COMMENTS */
    Route::resource('bcomments', BcommentController::class);

    //*********** ********** ************//

    /** CONTACTS */
    Route::resource('contacts', ContactController::class);

    /** FAQS */
    Route::resource('faqs', FAQController::class);

    /** TESTIMONIALS */
    Route::resource('testimonials', TestimonialController::class);
});

Route::redirect('/', '/fr');

Route::group(['prefix' => '{language?}'], function () {

    Route::get("locale/{lang}", function ($lang){
        session()->put("locale", $lang);
        return redirect()->route('home');
    });

    Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');

    Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');

    Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');

    Route::get('/faqs', [App\Http\Controllers\FrontendController::class, 'faqs'])->name('faqs');

    Route::get('/blog', [App\Http\Controllers\FrontendController::class, 'blog'])->name('blog');

    Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('services');

    Route::get('/consultationjuridiques', [App\Http\Controllers\FrontendController::class, 'consultationjuridiques'])->name('consultationjuridiques');

    Route::get('/recouvrementetcréances', [App\Http\Controllers\FrontendController::class, 'recouvrementetcréances'])->name('recouvrementetcréances');

    Route::get('/assistancesjuridiques', [App\Http\Controllers\FrontendController::class, 'assistancesjuridiques'])->name('assistancesjuridiques');

    Route::get('/auditjuridique', [App\Http\Controllers\FrontendController::class, 'auditjuridique'])->name('auditjuridique');

    Route::get('/avislégal', [App\Http\Controllers\FrontendController::class, 'avislégal'])->name('avislégal');

    Route::get('/juridictionsciviles', [App\Http\Controllers\FrontendController::class, 'juridictionsciviles'])->name('juridictionsciviles');

    Route::get('/blog/category/{cat_id}', [App\Http\Controllers\FrontendController::class, 'single_category_page'])->name('single_category_page');

    Route::get('/blog/{blog_id}', [App\Http\Controllers\FrontendController::class, 'single_blog_page'])->name('single_blog_page');

});


