<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonationController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('donors.create', compact('categories'));
    }

    public function store(Request $request) {
        $validatedAttributes = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'object_state' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        if ($request->file('image')->storeAs('public/donations', $imageName)) {
            $donation = Donation::create([
                'user_id' => auth()->id(),
                'category_id' => $validatedAttributes['category_id'],
                'title' => $validatedAttributes['title'],
                'description' => $validatedAttributes['description'],
                'address' => $validatedAttributes['address'],
                'object_state' => $validatedAttributes['object_state'],
                'image' => 'events/' . $imageName
            ]);

            if ($donation) {
                session()->flash('success', 'Donation created successfully!');
            } else {
                session()->flash('error', 'Failed to create new donation');
            }
        } else {
            session()->flash('error', 'Failed to upload image');
        }

        return redirect()->route('donors.index');
    }

    public function edit($id) {
        $categories = Category::all();
        $donation = Donation::findOrFail($id);
        return view('donors.edit', compact('categories', 'donation'));
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