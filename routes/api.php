<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\FormSubmissionController;

Route::post('/form-submit', [FormSubmissionController::class, 'store']);
