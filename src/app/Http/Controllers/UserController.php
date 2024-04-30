<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        return view('users.index');
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

    public function notifCount(User $user) {
        $count = $user->notifications()->count();
        // dd($count);

        return response()->json([
            'count' => $count
        ]);
    }
}
