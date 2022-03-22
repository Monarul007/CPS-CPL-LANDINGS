<?php

use App\Http\Controllers\SingUpController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('welcome2');
});

// Route::get('/dashboard',[WebSiteController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::get('/subscribe',[WebSiteController::class, 'subscribe'])->name('subscribe')->middleware(['auth']);

Route::middleware(['auth:sanctum', 'verified', 'nonPayingCustomer'])->get('/subscribe', function (Request $request) {
    if(isset($request->id)){
        $id = $request->id;
    }else{
        $id = 'price_1KavbCLzZgjLiNkC909Wommg';
    }
    return view('subscribe', [
        'intent' => auth()->user()->createSetupIntent(),
        'id' => $id,
    ]);
})->name('subscribe');

Route::middleware(['auth:sanctum', 'verified', 'nonPayingCustomer'])->post('/subscribe', function (Request $request) {
    auth()->user()->newSubscription('cashier', $request->plan)->create($request->paymentMethod);
    $url = 'https://hushcupid.com/login';
    return redirect('register_successfully');
})->name('subscribe.post');

Route::middleware(['auth:sanctum', 'verified', 'payingCustomer'])->get('/membersTwo', function () {
    return view('members');
})->name('membersTwo');

Route::middleware(['auth:sanctum', 'verified', 'nonPayingCustomer'])->get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::resource('members', MemberController::class);
Route::post('/gen_settings',[WebSiteController::class, 'gen_settings'])->name('gen_settings')->middleware(['auth']);

require __DIR__.'/auth.php';

Route::post('sing_up',[SingUpController::class, 'sing_up'])->name('sing_up');

Route::get('/register_successfully',[WebSiteController::class, 'register_successfully'])->name('register_successfully');

Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified', 'isAdmin'])->get('/designs', function () {
    return view('designs');
})->name('designs');

Route::post('/design_settings',[WebSiteController::class, 'designs'])->name('design_settings')->middleware(['auth']);