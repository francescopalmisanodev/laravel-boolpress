@extends('layouts.app')
@section('content')
    <div class="w-100 d-flex justify-content-center">
        <form class="w-50 d-flex justify-content-center flex-column" action="{{ route('admin.posts.update', $post->id) }}"
            method="POST">
            @csrf @method('PATCH')
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="{{ $post->title }}">
            <button class="mt-4 w-25 btn btn-primary" type="submit">
                Modifica il Post
            </button>
        </form>
    </div>
@endsection
