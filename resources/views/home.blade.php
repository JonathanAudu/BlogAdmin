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

                            <h6 class="text-white text-capitalize ps-3">
                                @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                @endif
                            </h6>
                            <h4 class="text-center">USER PAGE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{ route('update')}}">
            <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover"
                data-placement="bottom" data-content="Update User's Details" class="text-center">
                Update User
            </button>
        </a>
    </div>
    @endsection @section('scripts')
@endsection
