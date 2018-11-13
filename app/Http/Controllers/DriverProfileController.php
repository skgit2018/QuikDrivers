<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DriverProfile;
use Session;
use Auth;

class DriverProfileController extends Controller {

    public function DriverProfile() {
//Create an Object for the Model Class
        $driverprofile = new DriverProfile;
        /* $driver_data = DB::table('qdm_drivers_info')
          // ->join('contacts', 'users.id', '=', 'contacts.user_id')
          //->join('orders', 'users.id', '=', 'orders.user_id')
          ->select('users.*', 'contacts.phone', 'orders.price')
          ->get(); */
          $sess_id = Session::get('userdata')['id'];
        $driver_data = DB::select("SELECT * FROM qdm_users INNER JOIN qdm_drivers_info ON qdm_users.reg_user_id = qdm_drivers_info.reg_user_id INNER JOIN qdm_driver_idverify ON qdm_users.reg_user_id = qdm_driver_idverify.reg_user_id INNER JOIN qdm_driver_bank_details ON qdm_users.reg_user_id = qdm_driver_bank_details.reg_user_id INNER JOIN qdm_driver_verify ON qdm_users.reg_user_id = qdm_driver_verify.reg_user_id INNER JOIN driver_reference ON qdm_users.reg_user_id = driver_reference.reg_user_id INNER JOIN driver_emergency ON qdm_users.reg_user_id = driver_emergency.reg_user_id   AND qdm_users.reg_user_account_type = 'driver' WHERE qdm_users.reg_user_id = '".$sess_id."'");

        /*echo "<pre>";
        print_r($driver_data);
        echo "</pre>";*/


        return redirect('driverprofile')->with('driverprofiles', $driver_data); 
    }

}
