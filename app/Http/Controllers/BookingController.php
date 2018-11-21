<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Booking;
use Session;
use Auth;

class BookingController extends Controller
{
    public function Booking(Request $request){

$customerbook = new Booking;
$users = DB::table('users')
                     ->select(DB::raw('count(*) as user_count, status'))
                     ->where('status', '<>', 1)
                     ->groupBy('status')
                     ->get();


$d_data = DB::select("SELECT * FROM qdm_drivers_info WHERE reg_driver_location LIKE '%chimakurthy%'");



echo"<pre>";
print_r($d_data);
echo"</pre>";

    }
}
