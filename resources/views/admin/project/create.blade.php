@extends('layouts.admin')

@include('partials.header');
@section('content')
    <div class="container">

        <h1>Condividi un nuovo progetto</h1>

        <form action="{{ route('admin.project.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Nome progetto</label>
                <input type="text" class="form-control" name="title" id="title" required maxlength="150" minlength="3"
                    placeholder="Max 150 - Min 3">
            </div>

            <div class="d-flex">

                <div class="mb-3">
                    <label for="image">Immagine</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Url">
                </div>
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Condividi</button>
            <a href="{{ route('admin.project.index') }}" class="btn btn-danger">Annulla e torna indietro</a>

        </form>

    </div>
@endsection
