<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Reservation;

class StaticPagesController extends Controller
{
    public function home(){
        return view('/home');
    }
    public function about(){
        return view('pages/about');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'], 
            'phone_number' => ['required', 'string'], 
            'guest_total' => ['required', 'string'], 
            'time' => ['required', 'string'], 
        ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guest_total = request('guest_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/reservation/thank-you');
    }
    public function offers(){
        return view('pages/offers');
    }
    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'], 
            'phone_number' => ['required', 'string'], 
        ]);

        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offer/thank-you');
    }
    public function thankYou(){
        return view('pages/thank-you');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function menu(){
        return view('menu/index');
    }
    public function singleMenu(){
        return view('/menu/single-menu');
    }
    
}
