<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{


    public function show(Donation $donation) {
        $donation = $donation->with('user', 'category')->first();

        $user = auth()->user();
        $reservation = $user->reservations()->where('donation_id', $donation->id)->first();

        $user = auth()->user();
        $isFollowed = $user->follows()->where('followed_id', $donation->user->id)->first();

        return view('donation.details', compact('donation', 'isFollowed', 'reservation'));
    }
    public function create() {
        $categories = Category::all();
        return view('donors.create', compact('categories'));
    }

    public function store(Request $request) {
        // dd($request);
        $validatedAttributes = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'item_condition' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'donor_availability' => 'required|string',
        ]);

        // $imageName = time() . '.' . $request->image->extension();

        if ($imageName = $request->file('image')->store('donations')) {


            $donation = Donation::create([
                'user_id' => auth()->id(),
                'categorie_id' => $validatedAttributes['categorie_id'],
                'title' => $validatedAttributes['title'],
                'description' => $validatedAttributes['description'],
                'address' => $validatedAttributes['address'],
                'item_condition' => $validatedAttributes['item_condition'],
                'donor_availability' => $validatedAttributes['donor_availability'],
                'image' => $imageName
            ]);
            // dd($donation);

            if ($donation) {
                session()->flash('success', 'Donation created successfully!');
            } else {
                session()->flash('error', 'Failed to create new donation');
            }
        } else {

            dd('Failed to upload image');
            session()->flash('error', 'Failed to upload image');
        }

        return redirect()->route('donors.index');
    }

    public function edit($id) {
        $categories = Category::all();
        $donations = Donation::findOrFail($id);
        return view('donors.edit', compact('categories', 'donations'));
    }

    public function update(Request $request, $id) {
        $validatedAttributes = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'object_state' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $donation = Donation::findOrFail($id);
        $donation->update($validatedAttributes);

        if ($request->hasFile('image')) {
            $oldImagePath = $donation->image;
            if ($oldImagePath) {
                Storage::delete('public/' . $oldImagePath);
            }
            $imagePath = $request->file('image')->store('public/donations');
            $donation->image = str_replace('public/', '', $imagePath);
            $donation->save();
        }
        return redirect()->back();
    }

    public function destroy($id) {

        $donation = Donation::findOrFaill($id);

        if ($donation->image) {
            Storage::delete('public/' . $donation->image);
        }

        $donation->delete();

        return redirect()->back()->with('success', 'Donation deleted successfully!');
    }

    public function approve(Donation $donation) {

        $donation->update([
            'status' => 'approved'
        ]);

        return back();
    }

    public function reject(Donation $donation) {

        $donation->update([
            'status' => 'rejected'
        ]);

        return back();
    }

}
