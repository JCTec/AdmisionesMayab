<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\security;
use Illuminate\Support\Facades\Auth;

class PaymentController extends HomeController
{
    public function payment(){
        $user = Auth::user();

        if ($user) {
            $state = $this->getState();

            return view('Payment.PagoAlumno')->with(['state' => $state]);
        }
    }

    public function dummy(){
        $user = Auth::user();

        if ($user) {
            $transaction = Transaction::create(['idUser' => $user->id, 'estatus' => true]);

            return redirect()->route('home');
        }
    }
}
