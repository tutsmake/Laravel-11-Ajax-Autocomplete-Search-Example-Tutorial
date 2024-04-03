<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\TaskController;
  
Route::get('input-form', [TaskController::class, 'index']);
Route::get('search-autocomplete', [TaskController::class, 'searchAutocomplete']);