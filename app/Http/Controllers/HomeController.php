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
        $partners = [
            'trainingPartners'=>['img/partners/TutorOnTech.png'],
            'skill'=>['img/partners/TutorOnTech.png'],
        ];
        return view('index',compact('partners'));
    }
    
    public function web_application_services()
    {
        return view('web_application_services');
    }
    public function app_application_services()
    {
        return view('app_application_services');
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
    public function faq()
    {
        return view('faq');
    }
    public function myapps()
    {
        return view('myapps');
    }
    public function privacy()
    {
        return view('privacy');
    }
}
