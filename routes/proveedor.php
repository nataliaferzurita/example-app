<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Proveedor\ProvedorController;
use App\Http\Controllers\Proveedor\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);

Route::resource('proveedores',ProveedorController::class);
