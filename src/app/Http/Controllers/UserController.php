<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donation;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $donations = Donation::latest()->where(function ($query) {
            $query->whereHas('reservations', function ($query) {
                $query->where('status', 'pending');
            })->orDoesntHave('reservations');
        })->with('category')->paginate(12);

        $blogs = BlogPost::latest()->paginate(6);

        return view('users.index', compact('donations', 'blogs'));
    }

    public function explore(Request $request){
        $query = Donation::latest();

        // Filtrer par titre
        if ($request->has('q')) {
            $query->where('title', 'like', '%' . $request->input('q') . '%');
        }

        // Filtrer par catégorie
        if ($request->has('category')) {
            $query->where('categorie_id', $request->input('category'));
        }

        $donations = $query->paginate(10);
        $categories = Category::all();

        return view('users.explore', compact('donations', 'categories'));
    }


    public function follow(int $followed) {
        $user = auth()->user();
        $follow = $user->follows()->where('followed_id', $followed)->first();

        if($follow){
            $follow->delete();
        } else {
            $user->follows()->create([
                'followed_id' => $followed
            ]);
        }

        return redirect()->back();
    }


    public function notifs(User $user) {
        $notifs = $user->notifications()->limit(5)->get();
        // dd($notifs);

        return response()->json([
            'notifs' => $notifs
        ]);
    }

    public function notifCount(User $user) {
        $count = $user->notifications()->count();
        // dd($count);

        return response()->json([
            'count' => $count
        ]);
    }

    public function profile(){
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

        $totalBeneficiaries = User::where('role', 'user')->count();
        $approvedBeneficiaries = User::where('role', 'user')->whereHas('reservations', fn($q) => $q->where('status', 'approved'))->count();
        $pendingBeneficiaries = User::where('role', 'user')->whereHas('reservations', fn($q) => $q->where('status', 'pending'))->count();

    return view('users.profile', compact('user', 'lastActivities', 'followedUsers', 'totalBeneficiaries', 'approvedBeneficiaries', 'pendingBeneficiaries'));
}


    public function ban(User $user) {

        $user->delete();

        return back();
    }
}
