@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="w-75">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <label for="title" class="form-label mt-4">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del post">

                <button class="mt-4 btn btn-primary" type="submit">
                    Crea nuovo Post
                </button>
            </form>
        </div>
    </div>
@endsection
