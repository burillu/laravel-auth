@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Add new Project:</h2>
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    {{-- token --}}
                    @csrf
                    <label for="title">Title:</label>
                    <input id="title" value="{{ old('title') }}" type="text" name="title"
                        class="mb-3 form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image:</label>
                    <input id="image" value="{{ old('image') }}" type="text" name="image"
                        class="mb-3 form-control @error('image') is-invalid @enderror" required>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="body">Body:</label>
                    <textarea id="body" type="text" name="body" class="mb-3 form-control @error('body') is-invalid @enderror"></textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                    <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i></button>
                </form>
            </div>
        </div>

    </div>
@endsection
