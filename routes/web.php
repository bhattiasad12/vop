<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// middlware applied on base route
Route::get('/', function () {
    $value = session('locale');
    //dd($value);
    return view('welcome');
})->name('welcome');

Route::post('/change-language', function (Illuminate\Http\Request $request) {
    $lang = $request->input('lang');
    if (in_array($lang, ['en', 'ur'])) {
        session(['locale' => $lang]);
    }

    // dd($lang);

    return back();
})->name('change-language');

Route::get('/post', function () {
    return view('post.show');
})->name('post.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
