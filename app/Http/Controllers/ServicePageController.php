<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    
    public function index()
    {
        $services=Service::latest()->paginate(5);
        return view('service',compact('services'));
    }
 
}
