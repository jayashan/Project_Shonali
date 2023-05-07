<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CoinbaseCommerce\Resources\Checkout;
class CoinBaseController extends Controller
{
    //
    public function index()
    {
        //

        return view('pages.coinbase');
    }
}
