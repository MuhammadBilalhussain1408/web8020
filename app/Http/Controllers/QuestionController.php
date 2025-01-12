<?php

namespace App\Http\Controllers;

use App\Mail\QuestionAdminMail;
use App\Mail\QuestionCustomerMail;
use App\Models\WebEatery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    public function storeQuestions(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'email' => 'required|email:rfc,dns',
        ]);
        $isCaptchaValid = $this->validateRecaptcha($request);
        if ($isCaptchaValid) {
            $data = WebEatery::create($request->except('_token', 'submit','g-recaptcha-token'));
            $full_name = $data->full_name;
            Mail::to($data->email)->send(new QuestionAdminMail($data));
            Mail::to($data->email)->send(new QuestionCustomerMail($data));
            return view('thankyou', compact('full_name'));
        } else {
            return back()->withErrors('Recaptcha Failed');
        }
    }
    function validateRecaptcha($request)
    {
        $recaptchaResponse = $request->input('g-recaptcha-token');
        $secretKey = config('services.recaptcha_v3.secretKey');

        // Verify reCAPTCHA response using cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        $responseData = json_decode($response, true);

        if ($responseData && (!$responseData['success'] || $responseData['score'] < 0.5)) {
            return false;
        }

        // Proceed with form submission logic
        return true;
    }
}
