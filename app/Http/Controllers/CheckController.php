<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
    	$date = date("F Y");

    	print_r($date);
    	echo "<br/>";
    	$month = date('F', strtotime('-1 month'));
    	return $month;
    }
}
