@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-right w-100 mb-5"><a href="{{ route('admin.posts.create') }}">
                    <h2>Create</h2>
                </a></div>
            <div class="d-flex w-100 flex-column justify-content-center">
                @foreach ($posts as $post)
                    <div class="row d-flex justify-content-between mb-3">
                        <h3>
                            Title: {{ $post->title }}
                        </h3>
                        @if ($post->category) {{ $post->category->name }} @else Uncategorized @endif
                        <div class="actions d-flex">
                            <a class="btn btn-primary " href="{{ route('admin.posts.show', $post->slug) }}">Show</a>
                            <a class="btn btn-success mx-3" href="{{ route('admin.posts.edit', $post->slug) }}">Modify</a>
                            <form action="{{ route('admin.posts.destroy', $post->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
