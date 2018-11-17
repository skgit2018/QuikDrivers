<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use Session;
use Auth;

class BookingController extends Controller
{
    public function Booking(){

$customer_book = new Booking;
$dr_data = DB::select("SELECT * FROM qdm_drivers_info WHERE reg_driver_location LIKE '%chimakurthy%'");



echo"<pre>";
print_r($dr_data);
echo"</pre>";

    }
}
