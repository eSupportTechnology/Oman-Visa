<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkPermitController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\TemplateController;



Route::get('/', function () {
    return view('home');
})->name('homepage');

// Handle login
Route::post('/customer-login', [CustomerController::class, 'login'])->name('customer.login');

// Show customer details
Route::get('/customer-details/{id}', [CustomerController::class, 'showDetails'])->name('customer.details');
Route::post('/customer-logout', [CustomerController::class, 'logout'])->name('logouttt');


Route::get('/userlogin', function () {
    return view('userlogin');
});



Route::get('/dashboard', function () {
    return view('AdminDashboard.home');
})->name('dashboard.home');

Route::middleware(['auth','isadmin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout', [ProfileController::class, 'destroy'])->name('logout');
});




Route::prefix('customers')->group(function () {

    Route::get('/', [CustomerController::class, 'index'])->name('customers.index'); // List all work permits
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create'); // Show create form
    Route::post('/', [CustomerController::class, 'store'])->name('customers.store'); // Store new work permit
    Route::get('/{id}', [CustomerController::class, 'show'])->name('customers.show'); // Show single work permit
    Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit'); // Show edit form
    Route::put('/{id}', [CustomerController::class, 'update'])->name('customers.update'); // Update work permit
    Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy'); // Delete work permit
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
    Route::get('/{id}/pdf', [WorkPermitController::class, 'generatePdf'])->name('work_permits.pdf');

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

    Route::get('/template07_1', [TemplateController::class, 'template07_1'])->name('template07_1.index');
    Route::post('/template07_1/generate', [TemplateController::class, 'generate07_1'])->name('template07_1.generate');

    Route::get('/template07_2', [TemplateController::class, 'template07_2'])->name('template07_2.index');
    Route::post('/template07_2/generate', [TemplateController::class, 'generate07_2'])->name('template07_2.generate');

    Route::get('/template08', [TemplateController::class, 'template08'])->name('template08.index');
    Route::post('/template08/generate', [TemplateController::class, 'generate08'])->name('template08.generate');

    Route::get('/template08_1', [TemplateController::class, 'template08_1'])->name('template08_1.index');
    Route::post('/template08_1/generate', [TemplateController::class, 'generate08_1'])->name('template08_1.generate');

    Route::get('/template08_2', [TemplateController::class, 'template08_2'])->name('template08_2.index');
    Route::post('/template08_2/generate', [TemplateController::class, 'generate08_2'])->name('template08_2.generate');

    Route::get('/template09', [TemplateController::class, 'template09'])->name('template09.index');
    Route::post('/template09/generate', [TemplateController::class, 'generate09'])->name('template09.generate');

});

return view('AdminDashboard.templates.show1');


require __DIR__.'/auth.php';
