<?php

use App\Http\Controllers\TempController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//
Route::get('/',[TempController::class, 'index'])->name('welcome');

Route::resources([
    'users' => UsersController::class,
]);

//
//
//Route::get('/home', [HomeController::class, 'dashboard'])->name('home');



Route::get('/jobseeker-registeration', [UsersController::class,'jobseekerReg'])->name('jobseeker.reg');

Route::post('/save', [UsersController::class,'save'])->name('save');

Route::get('/check/{type}', [UsersController::class,'checkUser']);

Route::get('/jobseeker-profile', function (){
    return view('temp.jobseeker-profile');
})->name('jobseeker-profile');

Route::get('/searchall', function (){
    return view('temp.searchall');
})->name('searchall');

Route::get('/jobsearch_all', function (){
    return view('temp.jobsearch_all');
})->name('jobsearch_all');

Route::get('/government-jobs', function (){
    return view('temp.govt_job');
})->name('govt_job');

Route::get('/overseas-jobs', function (){
    return view('temp.overseas_jobs');
})->name('oversea_jobs');
Route::get('/recruiters', function (){
    return view('temp.recruiter-listing');
})->name('recruiters');
Route::get('/contact-us', function (){
    return view('temp.contactus');
})->name('contactus');

Route::get('/all-jobs', function (){
    return view('temp.all_jobs');
})->name('all_jobs');

Route::get('/jobs-by-companies', function (){
    return view('temp.job-by-company');
})->name('company_job');

Route::get('/jobs-by-category', function (){
    return view('temp.job_by_category');
})->name('category_job');

Route::get('/jobs-by-area', function (){
    return view('temp.job_by_area');
})->name('job_by_area');

Route::get('/edit-summary-info', function (){
    return view('temp.edit_objective_det');
})->name('edit_summary');

Route::get('/create-employee', function (){
    return view('temp.create_emp');
})->name('create_emp');

Route::get('/edit-resume-details', function (){
    return view('temp.edit_resume_det');
})->name('edit_resume_det');

Route::get('/itskills', function (){
    return view('temp.itskills');
})->name('itskills');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
