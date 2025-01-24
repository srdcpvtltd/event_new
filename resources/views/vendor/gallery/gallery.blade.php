@extends('vendor.layouts.app')
@section('content')
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-14">
            <ul class="d-flex align-items-center gap-2">
                <a href="{{ route('vendor.gallery') }}"> <i class="fa-solid fa-image"></i>
                    <b>Gallery</b></a>
            </ul>
        </div>
    </div>

    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="gallery-btn mb-5">
                        <button class="btn btn-primary">Photo upload guidelines</button>
                        <button class="btn btn-success">Upload photo/video</button>
                    </div>
                    <div class="gallery-delete mb-3">
                        <a class="btn btn-danger"><i class="fa-solid fa-trash"></i> Delete photo</a>
                    </div>
                    <div class="container gallery-container">
                        <div class="row"> <!-- Added row class here -->
                            <div class="col-md-3">
                                <div class="gallery-card">
                                    <img src="{{ asset('vendor/images/vendor-type/Planning & Decor.webp') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="gallery-card">
                                    <img src="{{ asset('vendor/images/vendor-type/Planning & Decor.webp') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="gallery-card">
                                    <img src="{{ asset('vendor/images/vendor-type/Planning & Decor.webp') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="gallery-card">
                                    <img src="{{ asset('vendor/images/vendor-type/Planning & Decor.webp') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <!-- Add more items if needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
