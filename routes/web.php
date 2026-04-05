<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/formtest', function () {
    return view('formtest');
});

Route::post('/emails', function (Request $request) {
    $request->validate([
        'email' => 'required|email'
    ]);

    $emails = session()->get('emails', []);

    if (in_array($request->email, $emails)) {
        return back()->with('error', 'Email already exists!');
    }

    if (count($emails) >= 5) {
        return back()->with('error', 'Limit reached! Maximum of 5 emails only.');
    }

    $emails[] = $request->email;
    session()->put('emails', $emails);

    return back()->with('success', 'Email added successfully!');
});

Route::post('/emails/delete/{id}', function ($id) {
    $emails = session()->get('emails', []);

    if (isset($emails[$id])) {
        unset($emails[$id]);
        session()->put('emails', array_values($emails));
    }

    return back()->with('success', 'Email deleted!');
});