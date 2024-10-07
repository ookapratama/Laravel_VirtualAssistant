<?php

use App\Http\Controllers\Chatbot\ChatbotController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ChatbotController::class, 'index'])->name('chat.index');

