<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\ViewCustomer;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customers/create',CreateCustomer::class);
Route::get('/customers',Customers::class);
Route::get('/customers/{customer}',ViewCustomer::class);
Route::get('/customers/{customer}/edit',ViewCustomer::class);
