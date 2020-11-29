<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests;
use App\Models\ContactUS;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactFormRequest;
use DB;

class ContactController extends Controller
{
    public function index()
    {
        $ContactUS = ContactUS::orderBy('created_at', 'desc')
        ->paginate(10);
        return view('contactus.contact', compact('ContactUS'));   
    
    }
    public function contactSaveData(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'message' => 'required',
         'g-recaptcha-response' => 'required|captcha',
    ]);

       $messages = $request->input('message');
             $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
           'subject' => $request->input('subject'),
           'message' => $messages,
            ];
              
         Mail::send('emails.testmail1',$data, function ($m) use ($data) {
            $m->to('info@mavensdesk.com')->subject('new client ');
            $m->from('no-reply@mavensdesk.com', 'new client ');
           
         });
      
    
            Mail::send('emails.testmail',$data, function ($m) use ($data) {
            $m->to($data['email'])->subject('Mavensdesk Support');
            $m->from('no-reply@mavensdesk.com', 'Mavensdesk contact us');
            $m->cc('info@mavensdesk.com','new client');
            });
        return back()->with('success','You have successfully upload file.');
   
   
        
    }
   
    public function mail(Request $request, $id){
        $ContactUS = ContactUS::findOrFail($id);
        return view('contactus.mail', compact('ContactUS'));
    }
}
