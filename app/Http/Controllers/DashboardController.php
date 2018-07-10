<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Models\Videos;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
		
		$videos = Videos::all();
		//user is logged in
		

    }

}
