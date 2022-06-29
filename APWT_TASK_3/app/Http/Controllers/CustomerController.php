<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function Login(){
        return view('customer.Login');
    }
    public function loginSubmitted(Request $request){
        $validate = $request->validate([
            "username"=>"required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20",
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/'
        ],
    );
}
    public function CustReg(){
        return view('customer.Registration');
    }
    public function passes($attribute, $value)
    {
        if(preg_match('/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/', $value)){
            return true;
        }else {
            return false;
        }
    }
    public function CustRegSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:4|max:20",
            "CustId"=>"required|integer|digits:8",
            'dob'=>'required|after_or_equal:1990-01-01|before:today',
            "gender"=>'required',
            "username"=>'required|string|regex:/^[a-zA-Z0-9\s]+$/|min:4|max:20',
            'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'confirmpass' => 'required_with:password|same:password|min:8',
            'email'=>'required|email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11',
            'address' => 'required'
        ],
        ['name.required'=>"Required Field must be Filled-Up"]
    );
    $output = "<h1>SUBMITTED DATA</h1>";
    $output.= "Name:     ".$request->name. "<br>";
    $output.= "ID:   ".$request->id. "<br>";
    $output.= "DOB:      ".$request->dob. "<br>";
    $output.= "Gender:   ".$request->gender. "<br>";
    $output.= "Email:    ".$request->email. "<br>";
    $output.= "Phone:    ".$request->phone. "<br>";
    $output.= "Address:  ".$request->address. "<br>";
    return $output;
   }

   public function Dashboard()
    {
        return view('customer.Dashboard');//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
