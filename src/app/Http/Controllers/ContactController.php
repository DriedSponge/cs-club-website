<?php

namespace App\Http\Controllers;

use App\Models\ContactFormResponse;
use App\Models\Mail\ContactForm;
use http\Exception;
use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "captcha_token" => "required",
            "name" => "required|max:150",
            "email" => "required|max:150|email:rfc,dns,spoof",
            "subject" => "required|max:256",
            "message" => "required|min:15|max:2000"
        ]);
        if ($validator->passes()) {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('captcha.secret'),
                'response' => $request->captcha_token,
            ]);
            if ($response['success']) {
                $data = new ContactFormResponse();
                $data->Name = $request->name;
                $data->Email = $request->email;
                $data->Subject = $request->subject;
                $data->Message = $request->message;
                Mail::to(config('mail.contactemail'))->send(new ContactForm($data));
                try {
                    return response()->json(['success' => 'Your message has been sent!']);
                } catch (Exception $e) {
                    return response()->json(['error' => 'Message failed to send, please try again later']);
                }
            } else {
                return response()->json(['captcha' => 'Captcha failed, please try again.']);
            }
        }
        return response()->json($validator->errors());
    }
}