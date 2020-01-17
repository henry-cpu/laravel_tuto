<?php

namespace App\Http\Controllers;

use App\Email;
use App\emailGestion\EmailRepository;
use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //
    public function getForm() {
        return view('email');
    }

    public function postForm(EmailRequest $request, EmailRepository $emailRepository) {

        $emailRepository->save($request->input('email'));
        return view('email_ok');

    }
    /*public function postform(EmailRequest $request, Email $email) {
        $email->email = $request -> input('email');
        $email->save();

        return view('email_ok');
    }*/
}
