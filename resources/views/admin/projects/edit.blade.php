@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center"> Edit Project:{{ $project->title }}</h2>
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    {{-- token --}}
                    @csrf
                    @method('PUT')
                    <label for="title">Title:</label>
                    <input id="title" value="{{ old('title', $project->title) }}" type="text" name="title"
                        class="mb-3 form-control @error('title') is-invalid @enderror" required>
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image:</label>
                    <input id="image" value="{{ old('image', $project->image) }}" type="file" name="image"
                        class="mb-3 form-control @error('image') is-invalid @enderror" required>
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="body">Body:</label>
                    <textarea id="body" type="text" name="body" class="mb-3 form-control @error('body') is-invalid @enderror">{{ old('body', $project->body) }}</textarea>
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
