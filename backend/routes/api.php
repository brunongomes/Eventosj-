<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\events;
use App\Http\Controllers\guests;

//Routers for events
Route::get('events', 'App\Http\Controllers\events@getAllevents');
Route::get('events/{id}', 'App\Http\Controllers\events@getEvent');
Route::post('events/create', 'App\Http\Controllers\events@createEvent');
Route::put('events/{id}', 'App\Http\Controllers\events@updateEvent');
Route::delete('events/{id}', 'App\Http\Controllers\events@deleteEvent');


//Routers for guests
Route::get('guests', 'App\Http\Controllers\guests@getAllguests');
Route::get('guests/{description_event}', 'App\Http\Controllers\guests@getEventDescription');
Route::post('guests/create', 'App\Http\Controllers\guests@createGuest');
Route::put('guests/{id}', 'App\Http\Controllers\guests@updateGuest');
Route::delete('guests/{id}', 'App\Http\Controllers\guests@deleteGuest');

