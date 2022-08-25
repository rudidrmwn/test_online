<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() 
    {
        $customers = Customer::paginate(5);

        return view('customers.index', compact('customers'));
    }

    public function cities() 
    {
        $customersByCity = Customer::get();

        return view('customers.city', compact('customersByCity'));
    }
}
