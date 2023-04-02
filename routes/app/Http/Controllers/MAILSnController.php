<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MAILSnController extends Controller
{




    public $name = '';
    public $email = '';
    public $password = '';
          /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail()
    {

        $details = [

            'email' =>$this->email,
          'name' =>$this->name,
           'password' =>$this->password,


       ];
      // public function index( Request $request){
//$pwd=
//$request->input("password");

//$mailData=([
   // "mdp"=>Hash::make("password"),
   // 'email' =>$this->email,
   //     'name' =>$this->name,
     //'password' =>$request->password,
//]) ;
        Mail::to('yohivana237@gmail.com')->send(new TestMail($details));

        dd("Email is sent successfully.");
    }
}
