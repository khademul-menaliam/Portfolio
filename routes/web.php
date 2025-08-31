<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;



Route::get('/', [PageController::class, 'show']); // defaults to hero

// Dynamic section pages with clean URLs
Route::get('/{section}', [PageController::class, 'show'])
     ->where('section', 'hero|about|skills|projects|contact');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
