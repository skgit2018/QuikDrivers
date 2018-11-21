<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CustomerProfile;
use Session;
use Auth;

class CustomerProfileController extends Controller
{
    public function CustomerProfile(){
  

 
        /* $customer_data = DB::table('qdm_vehicle_info')
          // ->join('contacts', 'users.id', '=', 'contacts.user_id')
          //->join('orders', 'users.id', '=', 'orders.user_id')
         // ->select('users.*', 'contacts.phone', 'orders.price')
          ->get(); */
        $customerprofile = new CustomerProfile;



        $sess_id = Session::get('userdata')['id'];
        $customer_data = DB::select("SELECT * FROM qdm_users INNER JOIN qdm_customer_info ON qdm_users.reg_user_id = qdm_customer_info.reg_user_id INNER JOIN qdm_vehicle_info ON qdm_users.reg_user_id = qdm_vehicle_info.reg_user_id   AND qdm_users.reg_user_account_type = 'user' WHERE qdm_users.reg_user_id='".$sess_id."'");


        /*echo"<pre>";
        print_r($customer_data);     // also try dd($data);
        echo "</pre>";exit;*/
      return redirect('customerprofile')->with('customerprofiles', $customer_data); 
    }
}
