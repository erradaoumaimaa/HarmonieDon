<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admins.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();

        if ($request->file('image')->storeAs('public/categories', $imageName)) {
            $category = Category::create([
                'name' => $validatedData['name'],
                'image' => 'categories/' . $imageName,
            ]);

            if ($category) {
                session()->flash('success', 'Category created successfully!');
            } else {
                session()->flash('error', 'Failed to create new category');
            }
        } else {
            session()->flash('error', 'Failed to upload image');
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admins.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
{

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $category = Category::findOrFail($id);
    $category->name = $validatedData['name'];

    if ($request->hasFile('image')) {
        $oldImagePath = $category->image;
        if ($oldImagePath) {
            Storage::delete('public/' . $oldImagePath);
        }
        $category->image = $request->file('image')->store('public/categories');
        $category->image = str_replace('public/', '', $category->image);
    }

    $category->save();

    session()->flash('success', 'Category updated successfully!');
    return redirect()->back();
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Storage::delete('public/' . $category->image);
        $category->delete();

        session()->flash('success', 'Category deleted successfully!');
        return redirect()->route('admins.index');
    }
}
