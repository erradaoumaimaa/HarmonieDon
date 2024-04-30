<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index() {
        return view('donors.index');

    }

    public function profile(){
        return view('donors.profile');
    }
    public function donations() {

        $donations = auth()->user()->donations()->with('category')->get();
        
        return view('donors.donations' , compact('donations'));
    }

    public function reservations()
    {
        $user = auth()->user();
        $reservations = $user->donations()->with('reservations.user', 'reservations.donation')->get()->pluck('reservations')->flatten();
        // dd($reservations);
        return view("donors.reservations", compact('reservations'));
    }
}
