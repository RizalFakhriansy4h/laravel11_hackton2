@extends('layouts.template_login')

@section('title', 'Register')

@section('content')
    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group mb-4">
            <label class="fw-semibold fs-14 mb-2 text-dark">Name<span class="text-danger">*</span></label>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Enter First Name" name="name">
                <label class="text-body fs-12" for="floatingInput">Enter Name</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label class="fw-semibold fs-14 mb-2 text-dark">Email Address<span class="text-danger">*</span></label>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput3" placeholder="Enter Email" name="email">
                <label class="text-body fs-12" for="floatingInput3">Enter Email</label>
            </div>
        </div>
        <div class="form-group mb-4">
            <label class="fw-semibold fs-14 mb-2 text-dark">Password <span class="text-danger">*</span></label>
            <div class="form-floating position-relative">
                <input type="password" class="form-control" id="password-field1" placeholder="Enter Password" name="password">
                <label class="text-body fs-12" for="password-field1">Enter Password</label>
                <span toggle="#password-field1" class="text-body ri-eye-line field-icon toggle-password position-absolute top-50 end-0 fs-20 translate-middle-y" style="right: 10px !important; cursor: pointer;"></span>
            </div>
        </div>
        <div class="form-group mb-4">
            <label class="fw-semibold fs-14 mb-2 text-dark">Confirm Password <span class="text-danger">*</span></label>
            <div class="form-floating position-relative">
                <input type="password" class="form-control" id="password-field2" placeholder="Enter Confirm Password" name="confirm_password">
                <label class="text-body fs-12" for="password-field2">Enter Confirm Password</label>
                <span toggle="#password-field2" class="text-body ri-eye-line field-icon toggle-password position-absolute top-50 end-0 fs-20 translate-middle-y" style="right: 10px !important; cursor: pointer;"></span>
            </div>
        </div>
        <div class="form-group mb-4">
            <button type="submit" class="btn btn-primary ounded-1 w-100 py-3">Register</button>
        </div>
        <div class="form-group mb-4 text-center">
            <p class="text-body mb-4 fs-14">Already have an account? <a href="{{route('login')}}" class="text-primary text-decoration-none">Login</a></p>
            <span class="or d-block"><span class="px-3 bg-white fw-medium">OR</span></span>
        </div>
        <div class="form-group mb-0 text-center">
            <ul class="social-link ps-0 mb-0 list-unstyled">
                <li>
                    <a href="{{ route('google.redirect') }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Google">
                    <i data-feather="mail"></i>
                    </a>
                </li>
            </ul>
        </div>
    </form>
@endsection