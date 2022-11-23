@extends('layouts.app')

@section('content')
    <div class="container">

        @include('layouts.header')

        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <div class="card">
                    <div class="card-header">{{ __('Inisiasi Projek') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div> --}}

                @include('inisiasi_projek.modal_add')

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="flex-col">
                                <div class="card-title text-bold mt-2">
                                    {{ __('Tabel Projek') }}
                                </div>
                            </div>
                            <div class="flex-col">
                                <!-- Button trigger modal -->
                                <button type="button btn-sm" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#modal_add">
                                    <i class="bi bi-plus-circle"></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('inisiasi_projek.table')
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
