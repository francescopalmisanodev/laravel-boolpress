@extends('layouts.app')
@section('content')
    <div class="w-100 d-flex justify-content-center">
        <form class="w-50 d-flex justify-content-center flex-column" action="{{ route('admin.posts.update', $post->id) }}"
            method="POST">
            @csrf @method('PATCH')
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">

            <label for="category_id" class="form-label mt-4">Category</label>
            <select name="category_id" id="category_id">
                <option value="">Uncategorized</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == old('category_id', $post->category_id)) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <button class="mt-4 w-25 btn btn-primary" type="submit">
                Modifica il Post
            </button>
        </form>
    </div>
@endsection
