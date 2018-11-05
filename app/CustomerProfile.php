<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    private $usertable = 'qdm_users';
    private $drivertable = 'qdm_customer_info';
    public $timestamps = false;
}
