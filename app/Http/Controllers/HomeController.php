<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    
    public function application_services()
    {
        return view('application_services');
    }
    
    public function digital_services()
    {
        return view('digital_services');
    }
    
    public function training_services()
    {
        return view('training_services');
    }
    
    public function recruitment_services()
    {
        return view('recruitment_services');
    }
    
    public function consulting_services()
    {
        return view('consulting_services');
    }
    
    public function public_relations_services()
    {
        return view('public_relations_services');
    }
    
    public function branding_promotion_services()
    {
        return view('branding_promotion_services');
    }
    
    public function business_Advisory_services()
    {
        return view('business_Advisory_services');
    }    

    public function clientTele()
    {
        return view('clientTele');
    }
    public function myapps()
    {
        return view('myapps');
    }
}
