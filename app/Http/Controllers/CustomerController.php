<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return $customers;
    }
    public function store()
    {
        $customer = new Customer();
        $customer->username = request("username", "");
        $customer->avatar = request("avatar", "");
        $customer->fname = request("fname", "");
        $customer->lname = request("lname", "");
        $customer->save();
        return $customer;
    }
    public function update($id)
    {
        $customer = Customer::find($id); // select * from where id = ? 
        $customer->username = request("username", "");
        $customer->avatar = request("avatar", "");
        $customer->fname = request("fname", "");
        $customer->lname = request("lname", "");
        $customer->save();
        return $customer;
    }
    public function delete($id)
    {
        $customer = Customer::find($id); // select * from where id = ? 
        $customer->delete();
        return[
            "msg" => "customer deleted succesfully"
        ];
    }
}
