@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->content }}</p>
    
    <h3>Comments</h3>
    <form action="{{ route('comments.store', $blog) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" name="comment" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </form>

    <ul class="list-group mt-3">
        @foreach($blog->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->author }}</strong>: {{ $comment->comment }}
            </li>
        @endforeach
    </ul>
@endsection
