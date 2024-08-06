<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Blog;
class CommentController extends Controller
{
    public function store(Request $request, Blog $blog)
    {
        $request->validate([
            'author' => 'required',
            'comment' => 'required',
        ]);

        $blog->comments()->create($request->all());
        return back();
    }
}
