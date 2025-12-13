<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


 Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');


 //// Generated Content Route 
 Route::get('/generate/main', [ContentController::class, 'GenerateContentMain'])->name('generate.main');
  Route::get('/add/content', [ContentController::class, 'AddContent'])->name('add.content');

Route::controller(ContentController::class)->group(function(){

Route::post('/content/generate', 'generateContentNew' );
Route::get('/edit/contents/{id}', 'EditContents' )->name('edit.contents');
Route::post('/content/update/{id}', 'ContentUpdate' )->name('content.update');
Route::get('/delete/contents/{id}', 'ContentDelete' )->name('delete.contents');

// Genereate Image 
Route::get('/generate/image', 'GenerateImage' )->name('generate.image');
Route::get('/add/generate/image', 'AddGenerateImage' )->name('add.generate.image');
Route::post('/generate-save-image', 'GenerateSaveImage' );

// Genereate Audio 
Route::get('/generate/audio', 'GenerateAudio' )->name('generate.audio');
Route::get('/add/audio', 'AddGenerateAudio' )->name('add.audio');
Route::post('/generate-audio', 'GenerateSaveAudio' );

});





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
