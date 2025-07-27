<?php

namespace App\Http\Controllers;

use App\Package;
use App\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PinController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin', 'members'], ['except' => ['check_serial', 'check_code']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pins = Pin::all();
//        dd($pins);

        return view('admin.pins.index', compact('pins'));
    }

    public function my_pins()
    {
        $username = app('current_user')->username;
        $pins = Pin::where('created_by', $username)->get();
//        dd($pins);

        return view('stockists.pins.index', compact('pins'));
    }

    public function new_pin()
    {
        return view('office.pins.create');
    }


    public function generatepin()
    {
        $packages = Package::all();

        return view('stockists.pins.create', compact('packages'));

    }


    public function postGeneratePin(Request $request)
    {

        $quantity = $request->quantity;
        $for = str_replace(' ', '-', $request->for);
        $batch = $for . '-' . $quantity;
        $package_id = $request->package_id;

//            dd(str_replace(' ', '-', $batch));
        $batch = str_replace(' ', '-', $batch);

        for ($j = 0; $j < $quantity; $j++) {

            $string = $this->random_str(10);

            if ($this->exists_in_db($string)) {
                # code...
//                $string = $this->generatepin();
                continue;
            }

            $this->savekey($string, $this->getserial($package_id), $batch, $package_id);
        }

        return redirect()->back()->with('success', $quantity . ' Pins Generated Successfuly');
    }


    public function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $str = '';
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $str .= $keyspace[random_int(0, $max)];
        }

        return mb_strtoupper($str, 'UTF-8');
    }


    public function savekey($string, $serial, $batch, $package_id)
    {
        $created_by = app('current_user');
        DB::table('pins')->insert(['batch' => $batch, 'package_id' => $package_id, 'code' => $string, 'serial' => $serial, 'status' => 0, 'created_by' => $created_by->username]);

    }

    public function getlastid()
    {
        $lastid = DB::select('SELECT max(id) AS maxID FROM pins');

        foreach ($lastid as $key => $v) {
            $lastid = $v->maxID;
        }
        if ($lastid == null) {
            return 1;
        } else {
            return $lastid + 1;
        }

    }

    public function getthememberid()
    {
        $serial = $this->getserial();
        return $serial;
    }

    public function getserial($package_id)
    {
        $lastid = $this->getlastid();

        switch ($package_id) {
            case 1:
                $string = "TE-MSC";
                break;
            case 2:
                $string = "SU-MSC";
                break;
            case 3:
                $string = "EM-MSC";
                break;
            case 4:
                $string = "AC-MSC";
                break;
            case 5:
                $string = "EG-MSC";
                break;
            default:
                $string = 'MSC';
        }


        //$countstring=strlen($lastid);
        $number = 4555;
        $number += $lastid;
        $countstring1 = strlen($number);

        if ($countstring1 == 4) {
            $string .= $this->random_str(4) . $number;
        } elseif ($countstring1 == 6) {
            $string .= $this->random_str(3) . $number;
        } elseif ($countstring1 == 7) {
            $string .= $this->random_str(2) . $number;
        } else {
            $string .= $number;
        }


        return $string;
    }


    public function exists_in_db($pin)
    {

        $pincount = DB::table('pins')->where('code', '=', $pin)->count();
        if ($pincount > 0) {
            return true;
        } else {
            return false;
        }

    }

    //generate random key
    public function generateKey($length)
    {
        /// Random characters
        $characters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

        // set the array
        $keys = array();

        // loop to generate random keys and assign to an array
        while (count($keys) < $length) {
            $x = mt_rand(0, count($characters) - 1);
            if (!in_array($x, $keys))
                $keys[] = $x;
        }

        // extract each key from array
        $random_chars = '';
        foreach ($keys as $key)
            $random_chars .= $characters[$key];

        // display random key
        return $random_chars;
    }

    public function print_pin()
    {
        $pins = Pin::all();
//        dd($pins);

        return view('admin.pins.print', compact('pins'));
    }

    public function sell_pin()
    {

        $pins = Pin::all();
//        dd($pins);

        return view('admin.pins.print', compact('pins'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function check_serial(Request $request)
    {
        //
        $serial = $request->serial;
        $package_id = $request->package_id;

        $pin = Pin::where('serial', $serial)->first();

        if ($pin && $pin->package_id == $package_id) {
            if ($pin && $pin->status == 0) {
                return json_encode(["result" => 'available']);
            } elseif ($pin && $pin->status == 5) {
                return json_encode(["result" => 'used']);
            } elseif ($pin && $pin->status == 5) {
                return json_encode(["result" => 'used']);
            } else {
                return json_encode(["result" => 'invalid']);
            }
        } else {
            return json_encode(["result" => 'wrong']);
        }

    }


    /**
     * check code to see validity.
     *
     * @return json result validity
     */
    public function check_code(Request $request)
    {
        //
        $coded = $request->code;

        $code = Pin::where('code', $coded)->first();

        if ($code && $code->status == 0) {
            return json_encode(["result" => 'available']);
        } elseif ($code && $code->status == 5) {
            return json_encode(["result" => 'used']);
        } else {
            return json_encode(["result" => 'invalid']);
        }
    }


}
