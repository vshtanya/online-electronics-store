<?php

use App\Http\Controllers\MaintextController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MaintextController::class, 'index']);