<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('client')->user();


    $user = Auth::guard('client')->user();


    return view('visitor.home',compact('user'));
})->name('home');

