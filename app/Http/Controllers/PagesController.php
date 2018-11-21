<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        return view('index');
    }
    public function getLogin(){
        return view('login');
    }
    public function getSignup(){
        return view('register');
    }
    public function getDriverVerification(){
        return view('driververification');
    }
   
    public function getDriverVerificationcheck(){
        return view('check');
    }
    public function getOtpVerification(){
        return view('otpverification');
    }
    public function getCustomer(){
        return view('customer');
    }
    public function getbooking(){
        return view('booking');
    }
    public function getvehicle(){
        return view('vehicle');
    }
    public function getdriverpool(){
        return view('driverpool');
    }
    public function getsuccess(){
        return view('success');
    }
    public function getsearch(){
        return view('searchresults');
    }
    public function getdriver(){
        return view('driverdetails');
    }
    public function getresults(){
        return view('qdmsearch');
    }
    public function getcbooking(){
        return view('conformbooking');
    }
    public function getcprofile(){
        return view('customerprofile');
    }
    public function getcrides(){
        return view('customerrides');
    }
    public function getcsettings(){
        return view('customersettings');
    } 
    public function getcdashboard(){
        return view('customerdashboard');
    }  
    public function getcpayments(){
        return view('customerpayments');
    }   
    public function getddashboard(){
        return view('driverdashboard');
    }   
    public function getdresults(){
        return view('driverresults');
    }   
    public function getqdbook(){
        return view('qdbooking');
    }                    
    public function getdpayments(){
        return view('driverpayments');
    }  
    public function getdrides(){
        return view('driverrides');
    }   
    public function getdsettings(){
        return view('driversettings');
    }    
    public function getdprofile(){
        return view('driverprofile');
    }       
    public function getpostimage(){
        return view('postimage');
    }   
    public function getgoogle(){
        return view('google');
    }   
    public function getfront(){
        return view('front');
    }     
    public function getmobile(){
        return view('mobile ');
    }   
    public function getotpcheck(){
        return view('otpcheck');
    }    
    public function getclint(){
        return view('clint');
    }                                                             
}
