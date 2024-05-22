<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SistemaController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/dashboard', function () {
    return view('sistema.home');
})->middleware(['auth', 'verified'])->name('sistema.home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(InicioController::class)->group(function(){
    Route::get('/','index')->name('inicio.index');
    Route::get('/nosotros','nosotros')->name('inicio.nosotros');
    Route::get('/servicios','servicios')->name('inicio.servicios');
    Route::get('/asociados','asociados')->name('inicio.asociados');
    Route::get('/contacto','contacto')->name('inicio.contacto');
    Route::get('email/contacto','email')->name('email');
});

Route::controller(SistemaController::class)->group(function(){
    Route::get('sistema/index','index')->middleware(['auth', 'verified'])->name('sistema.index');
    Route::get('sistema/admin','admin')->middleware(['auth', 'verified'])->name('sistema.admin');
    Route::get('sistema/adminList','adminList')->middleware(['auth', 'verified'])->name('sistema.adminList');
    Route::get('sistema/adminSearch','adminSearch')->middleware(['auth', 'verified'])->name('sistema.adminSearch');
    Route::get('sistema/book','book')->middleware(['auth', 'verified'])->name('sistema.book');
    Route::get('sistema/bookConfig','bookConfig')->middleware(['auth', 'verified'])->name('sistema.bookConfig');
    Route::get('sistema/bookInfo','bookInfo')->middleware(['auth', 'verified'])->name('sistema.bookInfo');
    Route::get('sistema/catalog','catalog')->middleware(['auth', 'verified'])->name('sistema.catalog');
    Route::get('sistema/category','category')->middleware(['auth', 'verified'])->name('sistema.category');
    Route::get('sistema/categoryList','categoryList')->middleware(['auth', 'verified'])->name('sistema.categoryList');
    Route::get('sistema/client','client')->middleware(['auth', 'verified'])->name('sistema.client');
    Route::get('sistema/clientList','clientList')->middleware(['auth', 'verified'])->name('sistema.clientList');
    Route::get('sistema/clientSearch','clientSearch')->middleware(['auth', 'verified'])->name('sistema.clientSearch');
    Route::get('sistema/company','company')->middleware(['auth', 'verified'])->name('sistema.company');
    Route::post('sistema/company','company_create')->middleware(['auth', 'verified'])->name('sistema.company');
    Route::get('sistema/companyList','companyList')->middleware(['auth', 'verified'])->name('sistema.companyList');
    Route::get('sistema/home','home')->middleware(['auth', 'verified'])->name('sistema.home');
    Route::get('sistema/myAccount','myAccount')->middleware(['auth', 'verified'])->name('sistema.myAccount');
    Route::get('sistema/myData','myData')->middleware(['auth', 'verified'])->name('sistema.myData');
    Route::get('sistema/provider','provider')->middleware(['auth', 'verified'])->name('sistema.provider');
    Route::get('sistema/providerList','providerList')->middleware(['auth', 'verified'])->name('sistema.providerList');
    Route::get('sistema/Search','search')->middleware(['auth', 'verified'])->name('sistema.search');
});
