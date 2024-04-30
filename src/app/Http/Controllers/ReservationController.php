<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
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
