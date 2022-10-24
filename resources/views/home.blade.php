@extends('layouts.main')
@section('title')
    USER PAGE
@endsection
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            @if (session('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <h6 class="text-white text-capitalize ps-3">
                                {{ _('You are logged in!') }}
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection @section('scripts')
@endsection
