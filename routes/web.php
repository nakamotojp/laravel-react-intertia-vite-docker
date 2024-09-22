<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/First', function () {
    return Inertia::render('First', [
        'numberValue' => 919,
        'stringValue' => "Quick",
        'arrayValue' => [
            11,
            22,
            "33",
            44,
        ]
    ]);
});
