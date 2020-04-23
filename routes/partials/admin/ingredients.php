<?php


    /**
    * Routes pour les Ingredients
    */
    Route::group(['prefix'=>'ingredients'], function(){
        Route::get('/', 'IngredientsController@index');
        Route::get('/liste', 'IngredientsController@liste');
        Route::post('/', 'IngredientsController@store')->name('ingredients.store');
        Route::put('/{ingredient}', 'IngredientsController@update')->name('ingredients.update');
        Route::delete('/delete/{ingredient}', 'IngredientsController@destroy')->name('ingredients.delete');
    });