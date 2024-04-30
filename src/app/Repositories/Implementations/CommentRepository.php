<?php

namespace App\Repositories\Implementations;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{
    public function create(array $data)
    {
        $user = auth()->user();
        return $user->comments()->create($data);
    }
}
