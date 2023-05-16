<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;
use Illuminate\Support\Facades\Redirect;


class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices = Device::all();
        return view('devices',['devices'=>$devices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('device-form'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ModelName' => 'required|max:255',
            'Brand' => 'required|max:255',
            'ModelNumbers' => 'required|max:255',
            'DeviceType' => 'required|max:255',
            'ESim' => 'required|max:255',
            'OperatingSystem' => 'required|max:255',
        ]);
        
        $device = new Device;

        $device->ModelName=$request->ModelName;
        $device->Brand=$request->Brand;
        $device->ModelNumbers=$request->ModelNumbers;
        $device->DeviceType=$request->DeviceType;
        $device->ESim=$request->ESim;
        $device->OperatingSystem=$request->OperatingSystem;

        $device->save();        
        
        return Redirect::route('devices');


    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        return view('device',['device'=>$device]);


    }

    public function seize(Device $device)
    {
        return view('seize-device',['seize-device'=>$device]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $devices = Device::where('ModelName','like','%'.$query.'%')
                           ->orWhere('Brand','like','%'.$query.'%')
                           ->orWhere('ModelNumbers','like','%'.$query.'%')
                           ->orWhere('DeviceType','like','%'.$query.'%')
        ->get();
        return view('device-search',compact('devices'));
    }
}




