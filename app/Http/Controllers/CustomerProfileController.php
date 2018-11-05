<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class CustomerProfileController extends Controller
{
    public function retrivedata(){
  
       
/*
        $data=DB::table('qdm_customer_info')->join('qdm_users','reg_user_email','reg_mobile_number')
        ->select('qdm_customer_info.*','reg_customer_first_name','reg_customer_last_name')
        ->where(["reg_user_id"=>26])->get();*/
        
        $data=DB::table('qdm_customer_info')
        ->join('qdm_users','qdm_customer_info.reg_user_id','=','qdm_users.reg_user_id')
        ->join('qdm_vehicle_info','qdm_vehicle_info.reg_user_id','=','qdm_customer_info.reg_user_id')

        ->select('qdm_customer_info.reg_customer_first_name','qdm_customer_info.reg_customer_last_name',
        'qdm_customer_info.reg_customer_street','qdm_customer_info.reg_customer_location',
        'qdm_customer_info.reg_customer_city','qdm_customer_info.reg_customer_state','qdm_customer_info.reg_customer_image',
        'qdm_users.reg_user_email','qdm_users.reg_mobile_number','qdm_vehicle_info.reg_vehicle_type','qdm_vehicle_info.reg_vehicle_make',
        'qdm_vehicle_info.reg_vehicle_model','qdm_vehicle_info.reg_vehicle_No','qdm_vehicle_info.reg_vehicle_year',
        'qdm_customer_info.reg_customer_emergency_name','qdm_customer_info.reg_customer_emergency_email',
        'qdm_customer_info.reg_customer_emergency_mobile','qdm_customer_info.reg_customer_emergency_landline')
        ->where("qdm_customer_info.reg_user_id",'=', $sess_id = Session::get('userdata')['id'])->get();  
         
        
        //->where(["reg_user_id"= 26])->get() will pass session   $sess_id = Session::get('userdata')['id'];

       
      /*echo"<pre>";
        print_r($data);     // also try dd($data);
        echo "</pre>";*/
        return view('customerprofile',['data'=>$data]);
    }
}
