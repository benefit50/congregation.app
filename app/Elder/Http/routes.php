<?php
/**
 * Created by PhpStorm.
 * User: dmitricercel
 * Date: 14.11.16
 * Time: 21:40
 */
Route::group(['middleware' => 'web'], function () {
    Route::get('/api/elder', function (){
        return response()->json([
            ['name' => 'Чертан Михаил'],
            ['name' => 'Железняк Вячеслав'],
            ['name' => 'Вранчан Олег'],
        ]);
    });
});