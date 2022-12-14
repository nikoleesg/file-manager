<?php

use LaravelApp\FileManager\Http\Controllers\FileManagerController;

Route::get('file-manager', FileManagerController::class.'@index');