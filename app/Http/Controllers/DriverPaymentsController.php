<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DriverPayments;


class DriverPaymentsController extends Controller
{
    public function DriverPayments(Request $request){

$driver = new DriverPayments;


$driver->reg_user_id = $request->input('reg_user_id');
$driver->driver_payment_pending = $request->input('driver_payment_pending');
$driver->driver_payment_credit = $request->input('driver_payment_credit');
$driver->reg_driver_status = 1;



$driver->save();
    }
}
