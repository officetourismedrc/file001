<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuProvinceOnglets;
use App\Http\Controllers\ProvinceDivisionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\Admin\IndexPage\QrcodeFolder;

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Miscelaneous\InfoEssentiel\InfoVisa\InfoVisaController;
use App\Http\Controllers\Miscelaneous\ActuOntDocs\ActuOntcontroller;

use App\Http\Controllers\Admin\ProvinceDoc\ProvinceController;
use App\Http\Controllers\Admin\ProvinceDoc\DecoupageAdminCatController;
use App\Http\Controllers\Admin\ProvinceDoc\DeuxniveauController;
use App\Http\Controllers\Admin\ProvinceDoc\ProvinceArticleController;
use App\Http\Controllers\Admin\ProvinceDoc\ProvinceArtActionController;

use App\Http\Controllers\Admin\ProvinceDoc\SousDiv2ArtController;

use App\Http\Controllers\Admin\IndexPage\IndexPageController;
use App\Http\Controllers\Admin\IndexPage\QrcodeFolder\QrcodeGeneratorController;
use App\Http\Controllers\Admin\IndexPage\QrcodeFolder\DownloadQrCodeController;

use App\Http\Controllers\Admin\ProvinceDoc\ProvinceSubDivisionUtility;
use App\Http\Controllers\Admin\MiscArticlesController;
use App\Http\Controllers\Admin\OntActuArtController;

use App\Http\Controllers\Admin\Parametre\articleCatContentController;
use App\Http\Controllers\Admin\OntArticleContentController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//start  admindashboard route ----  admindashboard route --- admindashboard route
Route::middleware('auth:admin')->group(function(){
    Route::get('/adminDashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    
    //start route for province management 

    Route::prefix('admin')->group(function(){
        Route::resource('province', ProvinceController::class)
                        ->missing(function () {
            return Redirect::route('welcome');
        });
        
        Route::get('parametre', [AdminDashboardController::class, 'parametre'])->name('parametre.parametre');
        Route::get('article_content_cat', [AdminDashboardController::class, 'artContentCat']);
        Route::resource('ont_a_catmeta', articleCatContentController::class);
        Route::resource('ont_a_metadata', OntArticleContentController::class);
        
        Route::resource('decoupage-Administratif', DecoupageAdminCatController::class)
                        ->missing(function () {
                            return Redirect::route('welcome');
                        });
        Route::resource('deuxniveau', DeuxniveauController::class)
                        ->missing(function () {
                            return Redirect::route('welcome');
                        });
        Route::resource('provart', ProvinceArticleController::class);

        Route::get('province-article/{artTitle}', [ProvinceArtActionController::class, 'showArticle'])->name('provarticle.show');
        
        Route::get('index-page', [IndexPageController::class, 'index'])->name('index.page');
        
        //qrcode generator ==============================================================================================================
        
        Route::get('qr-code', [QrcodeGeneratorController::class, 'index'])->name('index.page.qr-code');
        Route::get('download-qrCode', [DownloadQrCodeController::class, 'download'])->name('index.page.qr-code-download');
        
        Route::get('download-misc-qrCode/{id}', [DownloadQrCodeController::class, 'downloadMisc'])->name('index.page.misc-qr-code-download');
        
        Route::get('create-qr-code', [QrcodeGeneratorController::class, 'createQrcode'])->name('create.page.qr-code');
        Route::post('store-qr-code', [QrcodeGeneratorController::class, 'storeQrcode'])->name('store.page.qr-code');
        
        Route::resource('siteqrcodes', QrcodeFolder::class);
        
        //route for province sous division =============================================================================================
        
         Route::resource('sousdiv2art', SousDiv2ArtController::class)
                        ->missing(function () {
            return Redirect::route('welcome');
        });
        
        //route province sub division article gestion for a particular sub division
        
        Route::get('province-sous-division-article/{province_sous_division}',[ProvinceSubDivisionUtility::class, 'ProvinceSudDivisionArticles'])
                  ->name('psd.article');
                  
        //route for province sous division
        
         Route::get('miscellaneous-article', [MiscArticlesController::class, 'index'])
                        ->name('miscArticle.index')
                        ->missing(function () {
            return Redirect::route('welcome');
        });
        
         //route for ont article
        
         Route::resource('ontactuart', OntActuArtController::class)
                        ->missing(function () {
            return Redirect::route('welcome');
        });
                  
                  
        
    });
});


//end adminDashbaord route================================================================================

// application route ------------------------------------ application route


Route::get('/',[WelcomeController::class, 'welcome'])->name('welcome');

//province articles links
Route::get('provinces/{province}/articles/{id}/{name}',[MenuProvinceOnglets::class, 'ProvinceArticleOnglet'])->name('province.article');

//province division articles route

Route::get('province-division/{province_id}/{sd_id}/{article_id}', [ProvinceDivisionController::class, 'provinceDivisionArticle'])->name('province.division.article');


//essentiel info route
//info visa
Route::get('/infoEssentiel/{cat}/{catid}/{id}/{title}', [InfoVisaController::class, 'infoVisa'])->name('misc.infoessentiel.infovisa');

//ont info route
Route::get('/actu_ont/{id}/{title}' , [ActuOntcontroller::class, 'ontActu'])->name('misc.ont_actu');


require __DIR__.'/auth.php';
