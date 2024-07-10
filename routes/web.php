<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

# rota de teste
Route::get('/test', [TaskController::class, 'test']);
