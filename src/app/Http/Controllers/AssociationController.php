<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogPost;
class AssociationController extends Controller
{
    public function index() {
        $blogs = BlogPost::latest()->paginate(6);
        return view('association.index',compact('blogs'));
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

        return view('association.profile', compact('user', 'lastActivities','followedUsers'));
    }
}
