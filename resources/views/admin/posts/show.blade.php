@extends('layouts.app')
@section('content')
    <div class="w-100 d-flex justify-content-center align-items-center flex-column">
        <a href="{{ route('admin.posts.index') }}">
            <h2>Posts</h2>
        </a>
        <div class="w-75 d-flex justify-content-between align-items-center flex-column mt-5">
            <h1>
                Title: {{ $post->title }}
            </h1>
            <span>
                <strong>Category</strong>
                @if ($post->category)
                    {{ $post->category->name }}
                @else Uncategorized
                @endif
            </span>
            @if (!$post->tags->isEmpty())
                <h3>Tags</h3>
                @foreach ($post->tags as $tag)
                    <span class="badge badge-primary">{{ $tag->name }}</span>
                @endforeach
            @else
                <p>No Tags for this post </p>
            @endif

            <div class="actions w-25 d-flex justify-content-between">
                <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->slug) }}">Modify</a>
                <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </div>

        </div>
    </div>

@endsection
