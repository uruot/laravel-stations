<?php
 Route::get('practice', function() {
 return response('practice');
 });

 Route::get('practice2', function() {
    $test = 'practice2';
    return response($test);
    });

 Route::get('practice3', function() {
    $test = 'test';
    return response($test);
    });