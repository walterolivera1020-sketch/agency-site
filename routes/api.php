<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

Route::post('/inquiries', [InquiryController::class, 'store']);