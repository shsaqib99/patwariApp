<?php

if (!function_exists('DistrictData')){
    function DistrictData(){
        $data = \App\Models\District::all();
        return $data;
    }
}

if (!function_exists('tehsilData')){
    function tehsilData(){
        $data = \App\Models\Tehsil::all();
        return $data;
    }
}
