<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkPermitController;

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


require __DIR__.'/auth.php';
