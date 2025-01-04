<?php

use App\Http\Controllers\XmlController;
use Illuminate\Support\Facades\Route;

Route::get('xml/read/', [XmlController::class, 'read']);
