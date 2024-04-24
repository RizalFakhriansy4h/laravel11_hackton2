@extends('layouts.template_main')

@section('content')
<div class="row js-grid">
    <div class="col-xxl-4">
        <div class="card rounded-3 border-0 user-card mb-24">
            <img class="rounded-top-3" src="assets/images/profilebg.jpg" alt="profilebg">
            <div class="btn border-0 p-25 d-flex align-items-end text-start mt-top-minus-45" data-bs-toggle="dropdown">
                <div class="flex-shrink-0 position-relative">
                    <img class="rounded-circle wh-100" src="{{ $user->photo_profile }}" alt="user">
                </div>
                <div class="flex-grow-1 ms-3 d-xxl-block">
                    <h3 class="fs-15 mb-1">{{ $user->name }}</h3>
                    <span class="fs-14 text-body">{{ $user->role == 0 ? 'Member' : 'Admin' }}</span>
                </div>
            </div>
        </div>

    </div>

    <div class="col-xxl-8">
        <ul class="nav nav-tabs bg-white border-0 mb-25 p-20 rounded-3 overview-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <div class="card-body p-25 pb-10">
                    <h4 class="border-bottom border-color fw-semibold pb-10 mb-15">Personal Information</h4>
                    <span class="fs-16 fw-medium text-body d-block mb-10">About Me:</span>
                    <p class="text-body mb-25">{{ $user->bio }}</p>

                    <ul class="ps-0 mb-0 list-unstyled o-sortable">
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Name:</span>
                            <span class="text-body fw-medium fs-14">{{ $user->name }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Email:</span>
                            <a href="mailto:jacobsmith@dass.com" class="text-body fw-medium fs-14 text-decoration-none">{{ $user->email }}</a>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Job:</span>
                            <span class="text-body fw-medium fs-14">{{ $user->job }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Member Since:</span>
                            <span class="text-body fw-medium fs-14">{{ date('j F Y', strtotime($user->created_at)) }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15 d-flex align-items-center">
                            <span class="text-dark fw-medium fs-15 w-150">Social:</span>
                            <ul class="ps-0 mb-0 list-unstyled d-flex">
                                <li>
                                    <a href="{{ $user->link_ig }}" target="_blank" class="bg-primary-transparent d-inline-block text-center rounded-1" style="width: 40px; height: 40px; line-height: 38px;">
                                        <i data-feather="instagram" style="width: 20px; stroke: #5d87ff;"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

@endsection