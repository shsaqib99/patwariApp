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

if (!function_exists('qanoogoiData')){
    function qanoogoiData(){
        $data = \App\Models\Qanoongoi::all();
        return $data;
    }
}

if (!function_exists('patwarCircleData')){
    function patwarCircleData(){
        $data = \App\Models\PatwarCircle::all();
        return $data;
    }
}

if (!function_exists('mauzaData')){
    function mauzaData(){
        $data = \App\Models\Mauza::all();
        return $data;
    }
}

if (!function_exists('murabbaNumberData')){
    function murabbaNumberData(){
        $data = \App\Models\MurabbaNumber::all();
        return $data;
    }
}

if (!function_exists('khasraNumberData')){
    function khasraNumberData(){
        $data = \App\Models\KhasraNumber::all();
        return $data;
    }
}

if (!function_exists('subKhasraNumberData')){
    function subKhasraNumberData(){
        $data = \App\Models\SubKhasraNumber::all();
        return $data;
    }
}

