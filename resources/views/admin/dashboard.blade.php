@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Welcome') }} {{ Auth::user()->name }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">{{ __('Comandi') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">

                        </div>

                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header">{{ __('Dati') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <div class="border border-1">
                                left
                            </div>
                            <div class="border border-1">
                                right
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
