<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::all();
        return view('listCustomer', compact('customers'));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->email = $request->email;
        $customer->address = $request->address;

        $customer->save();
        return redirect()->route('customer.listCustomer');
    }
    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customer.listCustomer');
    }
    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view('edit',compact('customer'));
    }
    public function update(Request $request,$id){
          $customer = Customer::findOrFail($id);
//        $customer->name = $request->name;
//        $customer->email = $request->email;
//        $customer->address = $request->address;
//        $customer->save();
        $customer->update($request->all());
        return redirect()->route('customer.listCustomer');
    }
}
