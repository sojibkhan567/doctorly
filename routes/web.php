<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DepartmentController::class, 'index']);
Route::get('/create', [DepartmentController::class, 'create']);
Route::post('/store', [DepartmentController::class, 'store']);
Route::get('/admin/category/create', function() {
    return view('category');
});
Route::get('/admin/category/{id}', function(){
    return view('edit-category');
});
