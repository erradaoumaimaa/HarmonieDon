<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Reservation;
use App\Notifications\NewReservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function apply(Donation $donation)
    {
        $user = auth()->user();
        $reservation = $user->reservations()->where('donation_id', $donation->id)->first();
        if(! $reservation){
            $donation->reservations()->create([
                'user_id' => $user->id
            ]);

            $reciever = $donation->user()->first();
            $reciever->notify(new NewReservation($user, $donation));
        }  else if($reservation->status == 'pending'){
            $reservation->delete();
        }

        return redirect()->back();
    }

    public function approve(Reservation $reservation)
    {
        $reservations = $reservation->donation()->first()->reservations()->get();
        foreach ($reservations as $item) {
            $item->update([
                'status' => 'rejected'
            ]);
        }

        $reservation->update([
            'status' => 'approved'
        ]);

        return redirect()->back();
    }

    public function reject(Reservation $reservation)
    {
        // $reservations = $reservation->donation()->first()->reservations()->get();
        // foreach ($reservations as $item) {
        //     $item->update([
        //         'status' => 'pending'
        //     ]);
        // }
        $reservation->update([
            'status' => 'rejected',
        ]);

        return redirect()->back();
    }
}
