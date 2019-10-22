<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return view('discount');

    }

    public function calculate(Request $request)
    {
        $description = $request->description;
        $price = $request->price;
        $percent = $request->percent;

        $discountAmount = $price * $percent * 0.01;
        $discountPrice = $price - $discountAmount;

        return view('viewDiscount', compact('description', 'price', 'percent', 'discountAmount', 'discountPrice'));
    }
}
