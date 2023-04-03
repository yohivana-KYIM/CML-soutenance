<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public $name = '';
    public $email = '';

    public function index(): JsonResponse
    {
        $mailData = [
            'email' =>$this->email,
            'name' => $this->name,
        ];

        $message = 'Success';
        try {
            if (!Mail::to('ivanayoh98@gmail.com')->send(new DemoMail($mailData))) {
                $message = 'Error';
            }
        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getTrace()
            ]);
        }

        return response()->json([
            'message' => $message
        ]);
    }
}
