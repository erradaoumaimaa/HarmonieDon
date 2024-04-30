<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct(protected CommentRepositoryInterface $repository){}

    public function store(Request $request)
    {
        $payload = $request->validate([
            'content' => 'required|string|max:255',
            'blog_post_id' => 'required|exists:blog_posts,id',
        ]);

        try {
            $comment = $this->repository->create($payload);
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->back();
    }
}
