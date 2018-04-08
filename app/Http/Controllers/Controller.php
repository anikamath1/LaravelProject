<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


function getData(Request $req)
{   
        
        $data['data']= \DB::table('watches')->get();
        if(count($data)>0)
        {
            return view('insertForm',$data);
        }
        else
        {
            echo 'sorry..ur request was unsuccessfull';
        }
    
}

function getInfoForMobile(Request $req)
{   
        
        $data['data']= \DB::table('mobilephone')->get();
        if(count($data)>0)
        {
            return view('insertForminmobilephone',$data);
        }
        else
        {
            echo 'sorry..ur request was unsuccessfull';
        }
    
}


function getDataForClothing (Request $req)
{   
        
        $data['data']= \DB::table('clothing')->get();
        if(count($data)>0)
        {
            return view('insertForminclothing',$data);
        }
        else
        {
            echo 'sorry..ur request was unsuccessfull';
        }
    
}

}



