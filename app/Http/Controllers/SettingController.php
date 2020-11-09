<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class SettingController extends Controller
{
    
    public function index(){

        $setting = Setting::first();

        return view('settings', ['setting' => $setting]);
    }

    public function store(Request $request){

        $setting = Setting::first();

        if($setting){
            $setting->service_level = $request->service_level;
            $setting->save();
        }else {
            $setting = new Setting();
            $setting->service_level = $request->service_level;
            $setting->save();
        }

        return view('settings', ['setting' => $setting]);
    }
}
