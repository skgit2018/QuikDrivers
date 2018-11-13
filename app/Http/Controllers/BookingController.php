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


        $check_user = DB::select("select * from qdm_users");
             
        $user_id = $check_user[0]->reg_user_id;
        $user_name = $check_user[0]->reg_user_name;
        //$user_pwd = $user_check[0]->reg_user_pwd;
        //$user_email = $user_check[0]->reg_user_email;
        $user_account_type = $check_user[0]->reg_user_account_type;
        $user_status = $check_user[0]->reg_user_status;

       

        //Create an array inorder to create a session
      $user_datas = array(
            'id' => $user_id,
            'name' => $user_name,
            'account_type' => ucwords($user_account_type)
        );


        if($user_status ==1){
            
    return redirect("/qdbooking");
    $sess_uname = $request->session()->put('userdata', $user_data);       
    $sess_data = $request->session()->all();
        }else($user_status ==0){
            
            return redirect("/signup");
        }

/*echo"<pre>";
print_r($user_datas);
echo"</pre>";*/

    }
}
