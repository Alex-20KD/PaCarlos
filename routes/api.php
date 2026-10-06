<?php

use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\TransmissionController;
use Illuminate\Support\Facades\Route;

Route::prefix('transmissions')->group(function () {
    Route::get('/live', [TransmissionController::class, 'getActiveStream']);
    Route::get('/recent', [TransmissionController::class, 'getRecentTransmissions']);
});

Route::prefix('notifications')->group(function () {
    Route::get('/alerts', [NotificationController::class, 'getRecentAlerts']);
    Route::get('/channels', [NotificationController::class, 'getChannelsConfig']);
});
