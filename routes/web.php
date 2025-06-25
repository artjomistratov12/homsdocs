<?php
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function (Request $request) {
    $query = $request->input('q');

    if (empty($query)) {
        return response()->json([]);
    }

    $results = Service::search($query)->get();

    return response()->json($results);
});
