<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Events\mail_event;
use Illuminate\Support\Facades\Mail;
use App\Mail\first_email;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function views(){
        return view('dashboard');
    }
    //public function nnn(Request $ks){
        //$user = $ks->name;
        //event(new mail_event($user));
        //return view('dashboard');
    //}
    public function voo(Request $ks){
        $aa = $ks->name;
        event(new mail_event($aa));
        return ['result'=>'email is succesfully sent'];
    }
}
