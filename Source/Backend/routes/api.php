<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\Task\TaskController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Role\RoleUserController;
use App\Http\Controllers\User\UserTaskController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\User\UserProjectController;
use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\Task\TaskDocumentController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Project\ProjectTaskController;
use App\Http\Controllers\Role\RolePermissionController;
use App\Http\Controllers\Client\ClientProjectController;
use App\Http\Controllers\Client\ClientDocumentController;
use App\Http\Controllers\Project\ProjectDocumentController;
use App\Http\Controllers\Organization\OrganizationController;
use App\Http\Controllers\Organization\OrganizationClientController;
use App\Http\Controllers\Organization\OrganizationProjectController;
use App\Http\Controllers\Organization\OrganizationDocumentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/users', UserController::class);
    Route::get('/users.projects/{id}',[UserProjectController::class,'index']);
    Route::get('/users.tasks/{id}',[UserTaskController::class,'index']);

    Route::get('/clients', ClientController::class);
    Route::get('/clients.projects/{id}',[ClientProjectController::class,'index']);
    Route::get('/clients.documents/{id}',[ClientDocumentController::class,'index',]);
    Route::post('/clients.documents/{id}',[ClientDocumentController::class,'store']);


    Route::get('/organizations', OrganizationController::class);
    Route::get('/organizations.clients/{id}',[OrganizationClientController::class,'index']);
    Route::get('/organizations.projects/{id}',[OrganizationProjectController::class,'index']);
    Route::get('/organizations.documents/{id}',[OrganizationDocumentController::class,'index']);
    Route::post('/organizations.documents/{id}',[OrganizationDocumentController::class,'store']);


    Route::get('/projects', ProjectController::class);
    Route::get('/projects.tasks/{id}',[ProjectTaskController::class,'index']);
    Route::get('/projects.documents/{id}',[ProjectDocumentController::class,'index']);
    Route::post('/projects.documents/{id}',[ProjectDocumentController::class,'store']);


    Route::get('/tasks', TaskController::class);
    Route::get('/tasks.documents/{id}',[TaskDocumentController::class,'index']);
    Route::post('/tasks.documents/{id}',[TaskDocumentController::class,'store']);

    Route::get('/documents/{id}',[DocumentController::class,'show']);
    Route::put('/documents/{id}',[DocumentController::class,'update']);
    Route::delete('/documents/{id}',[DocumentController::class,'destroy']);

    Route::get('/roles', RoleController::class);
    Route::get('/roles.permissions/{id}',[RolePermissionController::class,'index']);
    Route::get('/roles.users/{id}',[RoleUserController::class,'index']);
});

