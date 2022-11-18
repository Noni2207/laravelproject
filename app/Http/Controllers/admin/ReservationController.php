<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $reservations = Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations' => $reservations
        ]);
    }

    public function create(){
        return view('admin/reservations/create');
    }
    public function store(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_numer' => ['required', 'string'],
            'guest_totla' => ['required', 'string'],
            'time' => ['required'],
        ]);

        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_numer = request('phone_numer');
        $reservation->guest_totla = request('guest_totla');
        $reservation->time = request('time');
        $reservation->save();
        return redirect('/admin/reservations');
    }
    
    public function edit($id){
        $reservation = Reservation::find($id);
        return view('admin/reservations/edit', [
            'category' => $reservation
            
        ]);
    }
    public function update($id){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_numer' => ['required', 'string'],
            'guest_totla' => ['required', 'string'],
            'time' => ['required'],
        ]);

        $reservation = Reservation::find($id);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_numer = request('phone_numer');
        $reservation->guest_totla = request('guest_totla');
        $reservation->time = request('time');
        $reservation->save();
        return redirect('/admin/reservations');
       
    }
    public function delete($id){
        $reservation = Reservation::find($id);
        $reservation->delete();
        return redirect('/admin/reservations');
    }
}
