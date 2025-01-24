@extends('vendor.layouts.app')
@section('content')
    <style>
        .form-check {
            display: flex;
            align-items: center;
        }

        .form-check-input {
            margin-right: 2px;
        }
    </style>
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-14">
            <ul class="d-flex align-items-center gap-2">
                <a href="{{ route('vendor.pricing') }}"> <i class="fa-solid fa-briefcase"></i>
                    <b>Pricing</b></a>
            </ul>
        </div>
    </div>

    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="row gy-3 needs-validation" novalidate action="" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add pricing details</h5>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service name</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Service name"
                                value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cost</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Cost"
                                value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Add more pricing details</button>
                        </div>

                        <div class="card-header">
                            <h5 class="card-title mb-0">Services you provide</h5>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Service name</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Service name"
                                value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Cost</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Cost"
                                value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">Add more services</button>
                        </div>

                        <hr>

                        <div class="col-md-6">
                            <h6>Your payment terms</h6>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="payment25"
                                    value="25_advance">
                                <label class="form-check-label" for="payment25">
                                    Up to 25% Advance
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="payment" id="payment50"
                                    value="50_advance">
                                <label class="form-check-label" for="payment50">
                                    Approx. 50% Advance while booking
                                </label>
                            </div>
                            <a class="btn btn-outline-primary btn-sm">Add more payment terms</a>
                        </div>

                        <div class="col-md-6">
                            <h6>Travel and lodging costs</h6>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="lodging" id="lodgingClientUs">
                                <label class="form-check-label" for="lodgingClientUs">
                                    Cost of Stay borne by Client, Travel borne by Us
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="lodging" id="lodgingClient">
                                <label class="form-check-label" for="lodgingClient">
                                    Cost of Stay & Travel borne by Client
                                </label>
                            </div>
                            <a class="btn btn-outline-primary btn-sm">Add more terms & conditions</a>
                        </div>
                        <hr>
                        <div class="form-group mt-3">
                            <h6 class="mb-3">Cancellation Policy</h6>
                            <label class="mb-3" for="">Describe your cancellation policy in details</label>
                            <textarea class="form-control" name="" cols="20" rows="4"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
