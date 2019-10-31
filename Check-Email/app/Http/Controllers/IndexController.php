<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view('index');
    }
    function checkEmail(Request $request){
        $email = $request->email;
        $result = "Email hop le";
        if (empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $result = "Email khong hop le";
        }
        return view('resultCheck',compact('result'));
    }

}
