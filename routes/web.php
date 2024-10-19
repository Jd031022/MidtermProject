<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('index');
});

// Route for Lab 1: Views
Route::get('/labs/1', function () {
    return view('labs.views');
});

// Route for Lab 2: Routes
Route::get('/labs/2', function () {
    return view('labs.routes');
});

// Route for Lab 3: Layouts
Route::get('/labs/3', function () {
    return view('labs.layouts');
});

// Route for Lab 4: Middleware
Route::get('/labs/4', function () {
    return view('labs.middleware');
});

// Routes for project details
Route::get('/project/view', function () {
    return view('projects.view');
});

Route::get('/project/route', function () {
    return view('projects.route');
});

Route::get('/project/layout', function () {
    return view('projects.layout');
});

Route::get('/project/middleware', function () {
    return view('projects.middleware');
});


Route::get('/', [PortfolioController::class, 'index'])->middleware('log.requests');
Route::get('/labs/1', [PortfolioController::class, 'lab1'])->middleware('log.requests');
Route::get('/labs/2', [PortfolioController::class, 'lab2'])->middleware('log.requests');
Route::get('/labs/3', [PortfolioController::class, 'lab3'])->middleware('log.requests');
Route::get('/labs/4', [PortfolioController::class, 'lab4'])->middleware('log.requests');
Route::get('/project/view', [PortfolioController::class, 'projectView'])->middleware('log.requests');
Route::get('/project/route', [PortfolioController::class, 'projectRoute'])->middleware('log.requests');
Route::get('/project/layout', [PortfolioController::class, 'projectLayout'])->middleware('log.requests');
Route::get('/project/middleware', [PortfolioController::class, 'projectMiddleware'])->middleware('log.requests');

