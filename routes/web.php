<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
    	'jobs' => [
    	[
    	'title' => 'Director',
    	'salary' => '$50,000'
    	],
    	[
    	'title' => 'Director 2',
    	'salary' => '$250,000'   
    	],
    	[
    	'title' => 'Director 3',
    	'salary' => '$150,000'   
    	]
  ]  
    	
     ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
