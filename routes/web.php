<?php

use App\Livewire\Orders;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/orders", Orders::class)->name("orders");


Route::post("/receive-orders", function (Request $request) {

    $orders = $request->input("orders");

    foreach ($orders as $orderData) {
        Order::create([
            'id' => $orderData['id'],
            'name' => $orderData['name'],
            'email' => $orderData['contact_email'],
            'phone' => $orderData['phone'],
            'city' => $orderData['city'],
            'zip' => $orderData['zip'],
            'country_code' => $orderData['country_code'],
            'province' => $orderData['province'],
            'country' => $orderData['country'],
            'address' => $orderData['address2'],
            'currency' => $orderData['currency'],
            'total' => $orderData['subtotal'],
        ]);
    }


    Log::info("Created");
});
