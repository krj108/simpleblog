@extends('layouts.app')

@section('content')
    <h1>All Blogs</h1>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>
                        <a href="{{ route('blogs.show', $blog) }}">{{ $blog->title }}</a>
                    </td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
