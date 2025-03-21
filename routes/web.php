<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkPermitController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('AdminDashboard.home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Work Permit Routes
Route::prefix('work-permits')->group(function () {
    Route::get('/', [WorkPermitController::class, 'index'])->name('work_permits.index'); // List all work permits
    Route::get('/create', [WorkPermitController::class, 'create'])->name('work_permits.create'); // Show create form
    Route::post('/', [WorkPermitController::class, 'store'])->name('work_permits.store'); // Store new work permit
    Route::get('/{id}', [WorkPermitController::class, 'show'])->name('work_permits.show'); // Show single work permit
    Route::get('/{id}/edit', [WorkPermitController::class, 'edit'])->name('work_permits.edit'); // Show edit form
    Route::put('/{id}', [WorkPermitController::class, 'update'])->name('work_permits.update'); // Update work permit
    Route::delete('/{id}', [WorkPermitController::class, 'destroy'])->name('work_permits.destroy'); // Delete work permit
    Route::get('/{id}/template', [WorkPermitController::class, 'template'])->name('work_permits.template'); // Generate work permit template
});


// Template Routes
Route::prefix('template')->group(function () {
    Route::get('/template01', [TemplateController::class, 'template01'])->name('template01.index');
    Route::post('/template01/generate', [TemplateController::class, 'generate01'])->name('template01.generate');

    Route::get('/template02', [TemplateController::class, 'template02'])->name('template02.index');
    Route::post('/template02/generate', [TemplateController::class, 'generate02'])->name('template02.generate');

    Route::get('/template03', [TemplateController::class, 'template03'])->name('template03.index');
    Route::post('/template03/generate', [TemplateController::class, 'generate03'])->name('template03.generate');

    Route::get('/template04', [TemplateController::class, 'template04'])->name('template04.index');
    Route::post('/template04/generate', [TemplateController::class, 'generate04'])->name('template04.generate');

    Route::get('/template05', [TemplateController::class, 'template05'])->name('template05.index');
    Route::post('/template05/generate', [TemplateController::class, 'generate05'])->name('template05.generate');

    Route::get('/template06', [TemplateController::class, 'template06'])->name('template06.index');
    Route::post('/template06/generate', [TemplateController::class, 'generate06'])->name('template06.generate');

    Route::get('/template07', [TemplateController::class, 'template07'])->name('template07.index');
    Route::post('/template07/generate', [TemplateController::class, 'generate07'])->name('template07.generate');

    Route::get('/template08', [TemplateController::class, 'template08'])->name('template08.index');
    Route::post('/template08/generate', [TemplateController::class, 'generate08'])->name('template08.generate');
});

Route::get('/show', function () {
    return view('AdminDashboard.templates.show1');
});

require __DIR__.'/auth.php';
