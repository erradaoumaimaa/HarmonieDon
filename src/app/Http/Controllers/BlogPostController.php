<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index() {
        $blogs = BlogPost::latest()->paginate(10);
        // dd($blogs);
        return view('welcome', compact('blogs'));
    }

    public function show(BlogPost $blog) {
        $user = auth()->user();
        $blog = $blog->with('user', 'comments.user', 'likes')->first();
        $likeExists = $user->likes()->where('blog_post_id', $blog->id)->first();
        // dd($likeExists);
        return view('blog.details', compact('blog', 'likeExists'));
    }

    public function create() {

        return view('association.create');
    }

    public function store(Request $request) {
        // dd($request);
        $validatedAttributes = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'reading_time' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $imageName = time() . '.' . $request->image->extension();

        if ($imageName = $request->file('image')->store('blogs')) {

            $blogs = BlogPost::create([
                'user_id' => auth()->id(),
                'title' => $validatedAttributes['title'],
                'content' => $validatedAttributes['content'],
                'reading_time' => $validatedAttributes['reading_time'],
                'image' => $imageName
            ]);
            // dd($blogs);

            if ($blogs) {
                session()->flash('success', 'blog created successfully!');
            } else {
                session()->flash('error', 'error to create new blog');
            }
        } else {

            dd('Failed to upload image');
            session()->flash('error', 'Failed to upload image');
        }

        return redirect()->route('association.index');
    }

    public function like(BlogPost $blog) {
        $user = auth()->user();

        if($like = $blog->likes()->where('user_id', $user->id)->first())
        {
            $like->delete();
        } else {
            $blog->likes()->create([
                'user_id' => $user->id
            ]);
        }

        return redirect()->back();
    }

}
