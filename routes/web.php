<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('index');

Route::post('/', [JobController::class, 'saveApplication']);

Route::get('/joblist', [JobController::class, 'list'])->name('job.list');

Route::get('/job/create', [JobController::class, 'create'])->name('job.create');

Route::post('/job/create', [JobController::class, 'store']);

Route::post('/jobs/candidates/search', [JobController::class, 'search'])->name('job.candidate.search');