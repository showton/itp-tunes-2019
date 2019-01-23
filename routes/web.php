<?php


Route::get('/', function () {
    return view('invoices');
});

Route::get('/', 'InvoicesController@index');
