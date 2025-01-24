@extends('vendor.layouts.app')
@section('content')
    <div class="dashboard-main-body">
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-14">
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="{{ route('vendor.dashboard') }}">
                        <i class="fa-solid fa-user"></i>
                        <b>Profile</b>
                    </a>
                </li>
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
                        <div class="col-md-6">
                            <label class="form-label">Your Brand Name</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Upload Owner/Contact Person profile photo</label>
                            <input type="file" name="title" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Vendor type</label>
                            <input type="text" value="{{ Auth::user()->get_vendor->name }}" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Location</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Login email id</label>
                            <input type="text" name="title" value="{{ Auth::user()->email }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Website link</label>
                            <input type="text" name="title" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Additional email id</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Instagram link</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact persong name</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Facebook link</label>
                            <input type="text" name="title" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact number(Must be in Whatsapp)</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Youtube link</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
