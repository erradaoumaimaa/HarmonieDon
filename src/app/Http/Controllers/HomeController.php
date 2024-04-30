<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use App\Models\BlogPost;

class HomeController extends Controller
{
    public function index() {
        $donations = Donation::latest()->where(function ($query) {
            $query->whereHas('reservations', function ($query) {
                $query->where('status', 'pending');
            })->orDoesntHave('reservations');
        })->with('category')->paginate(10);

        $blogs = BlogPost::latest()->paginate(6);

        return view('welcome', compact('donations', 'blogs'));
    }
}
