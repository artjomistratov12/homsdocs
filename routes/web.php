<?php
use App\Models\Service;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function () {
    $results = Service::search('Ipsam')->get();

    dd($results);
});
