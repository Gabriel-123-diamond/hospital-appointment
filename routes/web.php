<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Home route (loads index.blade.php with department data)
Route::get('/', [ProjectController::class, 'getAllDepartments'])->name('home');

// Protected routes that require authentication
Route::post('/showAppointments', [ProjectController::class, 'showAppointments'])->name('showAppointments')->middleware('auth');
Route::post('/bookAppointment', [ProjectController::class, 'bookAppointment'])->name('bookAppointment')->middleware('auth');
Route::get('/myBookings', [ProjectController::class, 'myBookings'])->name('myBookings')->middleware('auth');
Route::get('/cancelBooking', [ProjectController::class, 'cancelBooking'])->name('cancelBooking')->middleware('auth');

// Redirect to home after login instead of Laravel's default dashboard
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('home'); // Redirects to the home page
    })->name('dashboard');
});






















//  Redirects to Laravel Default Dashboard 
// <?php

// use App\Http\Controllers\ProjectController;
// use Illuminate\Support\Facades\Route;

// Route::get('/', [ProjectController::class, 'getAllDepartments'])->name('home');

// Route::post('/showAppointments', [ProjectController::class, 'showAppointments'])->name('showAppointments')->middleware('auth');

// Route::post('/bookAppointment', [ProjectController::class, 'bookAppointment'])->name('bookAppointment')->middleware('auth');

// Route::get('/myBookings', [ProjectController::class, 'myBookings'])->name('myBookings')->middleware('auth');

// Route::get('/cancelBooking', [ProjectController::class, 'cancelBooking'])->name('cancelBooking')->middleware('auth');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
