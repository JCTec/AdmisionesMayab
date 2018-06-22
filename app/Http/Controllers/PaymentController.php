<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use App\security;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function payment(){
        $user = Auth::user();

        if ($user) {
            return view('Payment.PagoAlumno');
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
