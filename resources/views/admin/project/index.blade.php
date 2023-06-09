@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Index Projects</h1>

        <a class="btn btn-success text-white" href="{{ route('admin.project.create') }}">Condividi nuovo progetto</a>

    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Created</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>{{ $project->title }}</td>
                    <td><img class="img-thumbnail" style="width:100px" src="{{ $project->image }}"
                            alt="{{ $project->title }}">
                    </td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{-- {{ route('admin.project.show') }} --}}" class="btn btn-primary text-white"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{-- {{ route('admin.posts.edit') }} --}}" class="btn btn-warning text-white"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{-- {{ route('admin.posts.destroy') }} --}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="delete-button btn btn-danger text-white"
                                    data-item-title="{{ $project->title }}"> <i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
