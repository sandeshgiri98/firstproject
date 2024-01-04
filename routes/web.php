<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Listing;
use SebastianBergmann\CodeUnit\FunctionUnit;

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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// Route::get('/hello', function(){
//     return response ('<h1>Hello World</h1>',200)
//     ->header('Content-Type','text/plain')
//     ->header('foo','bar');
// });
// Route::get('/post/{id}',function($id){
//     return response('Post' .$id);
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     return $request->name . ' '. $request->city;
// });

// Route::get('/',function(){
//     return View('listings',[
//         'heading'=>'Latest Listings'
//     ]);
// });

// Route::get('/',function(){
//     return view('laravel');
// });
// //required paramater
// Route::get('/emp/{id}',function($id){
//     echo'Emp '.$id;
// });
// //optional parameter
// Route::get('employ/{design?}',function($desig = null){
//     echo $desig;
// });
// //another example of optional parameter
// Route::get('employes/{name?}',function($name){
//     echo 'Your name is ' .$name;
// });
// Route::get('/',function(){
//     return view('welcome',[
//         'heading' => 'Latest Listings',
//         'welcome' => Listing::all()
//     ]);
// });

// Route::get('/welcome/{id}', function($id){
//     return view('welcom',[
//         'welcome' => Listing::find($id)
//     ]);
// // });
// Route::get('/', function(){
//     return view ('welcome');
// });

// Route::get('ID/{id}',function($id){
//     echo 'ID: ' .$id;
// });
Route::get('/',function(){
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
