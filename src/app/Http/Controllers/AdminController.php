<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donation;
use App\Models\Reservation;
class AdminController extends Controller
{
    public function index() {

        $users = User::latest()->paginate(5);
        return view('admins.index', compact('users'));
    }
    public function profile()
    {
        $user = auth()->user();
        $followedUsers = User::whereIn('id', $user->follows()->pluck('followed_id'))->take(5)->get();
        $lastActivities = collect([
            (object)['description' => 'Profile information changed.', 'created_at' => now()->subMinutes(3)],
            (object)['description' => 'Connected with Colby Covington.', 'created_at' => now()->subMinutes(15)],
            (object)['description' => 'Invoice #4563 was created.', 'created_at' => now()->subMinutes(57)],
            (object)['description' => 'Message received from Cecilia Hendric.', 'created_at' => now()->subHours(1)],
            (object)['description' => 'New order received #OR9653.', 'created_at' => now()->subHours(2)],
            (object)['description' => 'Message received from Jane Stillman.', 'created_at' => now()->subHours(2)],
        ])->sortByDesc('created_at');

        // Statistics related to donations and reservations
        $userId = $user->id;
        $totalDonations = Donation::where('user_id', $userId)->count();
        $approvedDonations = Donation::where('user_id', $userId)->where('status', 'approve')->count();
        $pendingDonations = Donation::where('user_id', $userId)->where('status', 'pending')->count();
        $rejectedDonations = Donation::where('user_id', $userId)->where('status', 'reject')->count();
        $totalReservations = Reservation::whereIn('donation_id', Donation::where('user_id', $userId)->pluck('id'))->count();
        $uniqueUsers = Reservation::whereIn('donation_id', Donation::where('user_id', $userId)->pluck('id'))->distinct('user_id')->count('user_id');

        return view('admin.profile', compact('user', 'lastActivities', 'followedUsers', 'totalDonations', 'approvedDonations', 'pendingDonations', 'rejectedDonations', 'totalReservations', 'uniqueUsers'));
    }
}
