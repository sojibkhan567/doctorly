<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DepartmentController::class, 'index']);
Route::get('/create', [DepartmentController::class, 'create']);
Route::post('/store', [DepartmentController::class, 'store']);
