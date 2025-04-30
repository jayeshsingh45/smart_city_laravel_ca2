<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});




Route::get('/get-all-resource-info', function () {
    $waterTanks = DB::select('SELECT * FROM water_tank');
    $dustbins = DB::select('SELECT * FROM dustbin');
    $transformers = DB::select('SELECT * FROM transformer');

    return response()->json([
        'water_tanks' => $waterTanks,
        'dustbins' => $dustbins,
        'transformers' => $transformers
    ]);
});


Route::post('/update-water-level/{id}/{new_level}', function (Request $request,$id,$new_level) {
 
    // Cast both to integers
    $id        = intval($id);
    $newLevel  = intval($new_level);
    
    // // Or get specific fields from the JSON payload
    // $id = intval($request->json('id'));
    // $newLevel = intval($request->json('water_level'));



    


    // Simple validation
    if (!$id || !$newLevel) {
        return response()->json(['message' => 'Missing id or water_level'], 400);
    }

    // Update the water level
    $updated = DB::update('UPDATE water_tank SET water_level = ? WHERE id = ?', [$newLevel, $id]);

    if ($updated) {
        return response()->json(['message' => 'Water level updated successfully']);
    } else {
        return response()->json(['message' => 'Water tank not found or no change made'], 404);
    }
});


Route::post('/update-dustbin-level/{id}/{new_level}', function (Request $request,$id,$new_level) {
    
    $id        = intval($id);
    $newLevel  = intval($new_level);

  
    // Perform the update
    $updated = DB::update(
        'UPDATE dustbin SET level = ? WHERE id = ?',
        [$newLevel, $id]
    );

    if ($updated) {
        return response()->json([
            'message' => 'Dustbin level updated successfully'
        ]);
    } else {
        return response()->json([
            'message' => 'Dustbin not found or no change made'
        ], 404);
    }
});


//TRANSFORMER STATUS ROUTE
Route::post('/set-status-transformer/{id}/{status}', function (Request $request,$id,$status) {
    // 1. Retrieve inputs from JSON body
    $id     = intval($id);
    // $status = 

    // 2. Validate presence and allowed values
    $allowed = ['running', 'repair', 'stop'];  
    if (! $id || ! in_array($status, $allowed, true)) {
        return response()->json(
            ['message' => 'Missing id or invalid status'], 
            400
        );
    }

    // 3. Perform the update via raw SQL
    $updated = DB::update(
        'UPDATE transformer SET status = ? WHERE id = ?', 
        [$status, $id]
    );  // uses the query builder’s update statement :contentReference[oaicite:2]{index=2}

    // 4. Return appropriate response
    if ($updated) {
        return response()->json(['message' => 'Transformer status updated'], 200);
    }

    return response()->json(
        ['message' => 'Transformer not found or no change made'], 
        404
    );
});