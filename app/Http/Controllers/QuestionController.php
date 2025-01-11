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
        $data = WebEatery::create($request->except('_token','submit'));
        $full_name = $data->full_name;
        Mail::to($data->email)->send(new QuestionAdminMail($data));
        Mail::to($data->email)->send(new QuestionCustomerMail($data));

        return view('thankyou',compact('full_name'));
    }
}
