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
    
    public function service_web_app_development()
    {
        return view('service_web_app_development');
    }
    
    public function service_seo_digital_marketing()
    {
        return view('service_seo_digital_marketing');
    }
    
    public function service_traning_skills_development()
    {
        return view('service_traning_skills_development');
    }
    
    public function service_recruitment_application()
    {
        return view('service_recruitment_application');
    }
    
    public function service_oracle_erp_consultancy()
    {
        return view('service_oracle_erp_consultancy');
    }
    
    public function service_public_relations()
    {
        return view('service_public_relations');
    }
    
    public function service_branding_promotion()
    {
        return view('service_branding_promotion');
    }
    
    public function service_business_Advisory()
    {
        return view('service_business_Advisory');
    }    

    public function myapps()
    {
        return view('myapps');
    }
}
