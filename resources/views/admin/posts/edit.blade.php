@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" value="{{ old('title', $post->title) }}">
                    @error('title')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        rows="3">{{ old('description', $post->description) }}</textarea>
                    @error('description')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="shug">Shug</label>
                    <input type="text" class="form-control @error('shug') is-invalid @enderror" id="shug"
                        name="shug" value="{{ old('shug', $post->shug) }}">
                    @error('shug')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-secondary" type="submit" value="UPDATE">
                </div>
            </form>
        </div>
    </section>
@endsection
