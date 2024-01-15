@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects:</h1>
        <div class="container">
            <table class="table table-hover mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ substr($project->body, 0, 100) . '...' }}</td>
                            <td><button class="btn btn-primary"> <a href="{{ route('admin.projects.show', $project->slug) }}">
                                        <i class="fa-sharp fa-regular fa-eye text-white"></i></a></button><button
                                    class="btn btn-warning"> <a href="{{ route('admin.projects.edit', $project->id) }}"> <i
                                            class="fa-regular fa-pen-to-square text-white"></i></a></button><button
                                    class="btn btn-danger"> <a href="{{ route('admin.projects.destroy', $project->id) }}">
                                        <i class="fa-regular fa-trash-can text-white"></i></a></button> </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <button class="btn btn-outline-dark"><a href="{{ route('admin.projects.create') }}"><i
                        class="fa-sharp fa-solid fa-plus"></i>Add new Project</a></button>
        </div>
    </section>
@endsection
