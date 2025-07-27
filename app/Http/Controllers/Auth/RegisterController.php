<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dd($data);
//        dd($data['package_id']);
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
//            'position' => ['required', 'integer'],
            'sponsor' => ['required', 'string', 'exists:users,username'],
            'parent' => ['required', 'string', 'exists:users,username'],
            'package_id' => ['required', 'integer', 'exists:packages,id'],
//            'bank_id' => ['required', 'integer'],
//            'bankaccountnumber' => ['required', 'string'],
//            'bankaccountname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string'],
//            'address' => ['required', 'string', 'max:500'],
            'serial' => ['required', 'string', 'max:15', 'exists:pins,serial,package_id,'.$data['package_id'],],
            'pincode' => ['required', 'string', 'max:10', 'exists:pins,code,status,0'],
            'username' => ['required', 'string', 'max:25', 'unique:users'],
//            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $serial = $data['serial'];
        $pincode = $data['pincode'];
        $package_id = $data['package_id'];


//            dd($package_id);
//            $membershipId = $serial;


            return User::create([
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'position' => $data['position'],
                'sponsor' => $data['sponsor'],
                'parent' => $data['parent'],
                'membership_id' => $serial,
                'package_id' => $package_id,
//                'bank_id' => $data['bank_id'],
//                'bank_account_number' => $data['bankaccountnumber'],
//                'bank_account_name' => $data['bankaccountname'],
                'phone_number' => $data['phone'],
//                'address' => $data['address'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

    }






    public function getthememberid()
    {
        $membershipid = $this->getmembershipid();
        return $membershipid;
    }



    public function exists_in_db($pin, $serial, $package_id)
    {
        $pincount = DB::table('pins')->where('code', '=', $pin)
            ->where('serial', '=', $serial)
            ->where('status', '=', 0)
            ->where('package_id', $package_id)
            ->first();



        if ($pincount != null) {
                    return true;
                } else{
                return false;
            }
    }


}
