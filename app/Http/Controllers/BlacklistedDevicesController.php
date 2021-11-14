<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlacklistedDevice;
class BlacklistedDevicesController extends Controller
{
    public function index(){
        return view('blacklisted_devices.index');
    }

    //report a lost device and store in the database
    public function store(){
        $device=new BlacklistedDevice();
        $device->name=request('name');
        $device->brand=request('brand');
        $device->model=request('model');
        $device->serial_number=request('serial_number');
        $device->imei_number=request('imei_number');
        $device->ob_number=request('ob_number');
        $device->area=request('area');

        //insert to database
        $device->save();
        return redirect('/')->with('mssg','Thank you for submiting your report');
    }

    //show create device view
    public function create(){
        return view('blacklisted_devices.create');
    }

    public function show(){
        $search_value=request('search');
        $device=BlacklistedDevice::where('serial_number',$search_value)->get();
        return view('blacklisted_devices.show',['device'=>$device]);

    }
    
}
