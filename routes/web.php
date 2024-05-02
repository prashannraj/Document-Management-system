<?php

use app\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('downloadimage/{record}',[DownloadController::class, 'download'])->name('download.image');
