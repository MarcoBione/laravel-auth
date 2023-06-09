@extends('layouts.admin')

@include('partials.header');
@section('content')
    <div class="container">

        <h1>Condividi un nuovo progetto</h1>

        <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title">Nome progetto</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="150" minlength="3"
                    placeholder="Max 150 - Min 3" value="{{ $project->name }}">
            </div>

            <div class="d-flex">

                <div class="mb-3">
                    <label for="image">Immagine</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Url"
                        value="{{ $project->image }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10" class="form-control" value="{{ $project->description }}"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Condividi</button>

        </form>

    </div>
@endsection
