<?php

Route::get('/',function(){
    return view('index');
});

Route::view('tes','tes');
Route::view('about','about');
Route::view('services','services');
Route::view('gallery','gallery');
Route::view('contact','contact');