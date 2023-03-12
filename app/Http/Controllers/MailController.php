<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
//use Mail;
use App\Mail\DemoMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail; 
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class MailController extends Controller
{
   
    public $name = '';
    public $email = '';
    public $password = '';
          /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        
        $mailData = [
           
            'email' =>$this->email,
          'name'=>$this->name,
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
        Mail::to('ivanayoh98@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}