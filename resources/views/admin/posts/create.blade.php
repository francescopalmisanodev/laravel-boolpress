@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="w-75">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <label for="title" class="form-label mt-4">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del post">

                <label for="category_id" class="form-label mt-4">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">Uncategorized</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                <div class="form-label mt-4">Tags</div>
                @foreach ($tags as $tag)
                    <span class="form-label mr-3">
                        <input type="checkbox" name="tags[]" id="tag{{ $loop->iteration }}" value="{{ $tag->id }}"
                            @if (in_array($tag->id, old('tags', []))) checked @endif>
                        <label for="tag{{ $loop->iteration }}">{{ $tag->name }}</label>
                    </span>
                @endforeach

                <button class="d-block mt-4 btn btn-primary" type="submit">
                    Crea nuovo Post
                </button>
            </form>
        </div>
    </div>
@endsection
