<?php

namespace App\Http\Controllers\client\dashboard_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    function index(){
        return view('client.dashboard_account.address');
    }
}
