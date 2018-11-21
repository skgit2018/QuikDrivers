<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DriverRides;
use App\UpcommingBooking;

class DriverRidesController extends Controller
{
    public function DriverRides(Request $request){

$driver = new DriverRides;

$upcomming = new UpcommingBooking;


   $driver->reg_user_id  = $request->input('reg_user_id'); //Session Data
   $driver->driver_past_date= $request->input('driver_past_date');
   $driver->driver_past_time =  $request->input('driver_past_time');
   $driver->driver_past_booking_id = $request->input('driver_past_booking_id');
   $driver->driver_past_location = $request->input('driver_past_location');
   $driver->driver_past_hours_booking = $request->input('driver_past_hours_booking');
   $driver->driver_past_booking_amount = $request->input('driver_past_booking_amount');
   $driver->driver_past_payment = $request->input('driver_past_payment');
   $driver->reg_driver_status = 1;



   /* Upcomming Booking*/
   $upcomming->reg_user_id  = $request->input('reg_user_id'); //Session Data
   $upcomming->driver_past_date= $request->input('driver_past_date');
   $upcomming->driver_past_time =  $request->input('driver_past_time');
   $upcomming->driver_past_booking_id = $request->input('driver_past_booking_id');
   $upcomming->driver_past_location = $request->input('driver_past_location');
   $upcomming->driver_past_hours_booking = $request->input('driver_past_hours_booking');
   $upcomming->driver_past_booking_amount = $request->input('driver_past_booking_amount');
   $upcomming->driver_past_payment = $request->input('driver_past_payment');
   $upcomming->reg_driver_status = 1;


   $driver->save();
   $upcomming->save();
    }
}
