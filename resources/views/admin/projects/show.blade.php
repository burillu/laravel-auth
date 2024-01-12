@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project:{{ $project->title }}</h1>
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-md-6">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}">
                </div>
                <div class="col-12 col-md-6">
                    <pre class="mb-5">
                        {{ $project->body }}
                    </pre>
                    <button class="btn btn-warning"> <a href="{{ route('admin.projects.edit', $project->id) }}"> <i
                                class="fa-regular fa-pen-to-square text-white"></i></a></button><button
                        class="btn btn-danger"> <a href="{{ route('admin.projects.destroy', $project->id) }}">
                            <i class="fa-regular fa-trash-can text-white"></i></a></button>
                </div>
            </div>

            <button class="btn btn-outline-dark"><a href="{{ route('admin.projects.create') }}"><i
                        class="fa-sharp fa-solid fa-plus"></i>Add new Project</a></button>
        </div>
    </section>
@endsection
