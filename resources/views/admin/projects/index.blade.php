@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects:</h1>
        <div class="container">
            <table class="table">
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
                            <td>{{ substr($project->body, 0, 15) . '...' }}</td>
                            <td><button class="btn btn-primary"> <a href="{{ route('admin.projects.show', $project->id) }}">
                                        <i class="fa-sharp fa-regular fa-eye text-white"></i></a></button><button
                                    class="btn btn-primary"> <a href="{{ route('admin.projects.edit', $project->id) }}"> <i
                                            class="fa-sharp fa-regular fa-eye"></i></a></button><button
                                    class="btn btn-primary"> <a href="{{ route('admin.projects.destroy', $project->id) }}">
                                        <i class="fa-sharp fa-regular fa-eye"></i></a></button> </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
