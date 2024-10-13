<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\VisitorController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/getvisitor',[VisitorController::class,'GetVisitorDetails']);
//post contact details to database from contact page
Route::post('/postcontact',[ContactController::class,'PostContactDetails']);
