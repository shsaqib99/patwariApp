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

if (!function_exists('khaivetData')){
    function khaivetData(){
        $data = \App\Models\Khaivet::all();
        return $data;
    }
}

if (!function_exists('khatooniData')){
    function khatooniData(){
        $data = \App\Models\Khatooni::all();
        return $data;
    }
}

if (!function_exists('khasraData')){
    function khasraData(){
        $data = \App\Models\Khasra::all();
        return $data;
    }
}

