<?php

namespace App\Http\Controllers;

use App\Mail\GroupMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // $user= Auth::user();
        $user = User::select('email')->get();
        $param = [ 'content' => $request->content ];
        Mail::to($user)->send(new GroupMail($param));
        // dd($user);
    }
}
