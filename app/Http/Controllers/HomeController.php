<?php

namespace App\Http\Controllers;
use App\Mail\Mailer;
use App\Mail\MailController;
use Illuminate\Http\Request;
use App\Mail\MAIL;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    
    public function about()
    {
        return view('about-us');
    }

    public function product()
    {
        return view('product');
    }

    public function internet()
    {
        return view('product-internet-services');
    }
<<<<<<< HEAD

    public function vpn()
    {
        return view('product-vpn');
    }

    public function manage()
    {
        return view('product-manage-service');
    }

    public function tripleplay()
    {
        return view('product-triple-service');
    }

    public function neutralhost()
    {
        return view('product-neutral-host');
=======
    public function vpn()
    {
        return view('product-vpn-services');
    }

    public function sendEmail(Request $request){
        $this->validate($request, [
            'name'      =>  'required',
            'phone'     => 'required',
            'email'     =>  'required|email',
            'message'   =>  'required'
        ]);
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'msg' => $request->message
        ];
      
        \Mail::to('hostidigital361@gmail.com')->send(new MAIL($details));
        return back()->with('message_sent','Your message has been sent successfully');
>>>>>>> origin/master
    }
}
