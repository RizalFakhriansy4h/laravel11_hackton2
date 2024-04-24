@extends('layouts.template_main')

@section('content')
<div class="row js-grid">
    <div class="col-xxl-4">
        <div class="card rounded-3 border-0 user-card mb-24">
            <img class="rounded-top-3" src="assets/images/profilebg.jpg" alt="profilebg">
            <div class="btn border-0 p-25 d-flex align-items-end text-start mt-top-minus-45" data-bs-toggle="dropdown">
                <div class="flex-shrink-0 position-relative">
                    <img class="rounded-circle wh-100" src="{{ $photo_profile }}" alt="user">
                </div>
                <div class="flex-grow-1 ms-3 d-xxl-block">
                    <h3 class="fs-15 mb-1">{{ $name }}</h3>
                    <span class="fs-14 text-body">{{ $role == 0 ? 'Member' : 'Admin' }}</span>
                </div>
            </div>
        </div>

        <div class="card rounded-3 border-0 user-card mb-24">
            <div class="card-body p-25">
                <h4 class="border-bottom border-color fw-semibold pb-10 mb-15">Admins</h4>
                
                <ul class="ps-0 mb-0 list-unstyled">
                    @foreach($admins as $admin)
                    <li class="d-flex justify-content-between align-items-center border-bottom border-color pb-15 mb-15">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img class="wh-50 rounded-circle" src="{{ $admin->photo_profile }}" alt="user-1">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="fs-15">{{ $admin->name }}</h4>
                                <span class="text-body">{{ $admin->job }}</span>
                            </div>
                        </div>

                        <div class="dropdown action-dropdown">
                            <button class="btn p-0 border-0 read-more-dot" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i data-feather="more-horizontal"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end border-color">
                                <li><a class="dropdown-item fs-14 text-body" href="{{ route('profile', ['email' => encrypt($admin->email)]) }}"><i data-feather="eye"></i>View Profile</a></li>
                            </ul>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xxl-8">
        <ul class="nav nav-tabs bg-white border-0 mb-25 p-20 rounded-3 overview-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <div class="card-body p-25 pb-10">
                    <h4 class="border-bottom border-color fw-semibold pb-10 mb-15">Personal Information</h4>
                    <span class="fs-16 fw-medium text-body d-block mb-10">About Me:</span>
                    <p class="text-body mb-25">{{ $bio }}</p>

                    <ul class="ps-0 mb-0 list-unstyled o-sortable">
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Name:</span>
                            <span class="text-body fw-medium fs-14">{{ $name }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Email:</span>
                            <a href="mailto:jacobsmith@dass.com" class="text-body fw-medium fs-14 text-decoration-none">{{ $email }}</a>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Job:</span>
                            <span class="text-body fw-medium fs-14">{{ $job }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15">
                            <span class="text-dark fw-medium fs-15 w-150">Member Since:</span>
                            <span class="text-body fw-medium fs-14">{{ date('j F Y', strtotime($created_at)) }}</span>
                        </li>
                        <li class="border-bottom border-color pb-15 mb-15 d-flex align-items-center">
                            <span class="text-dark fw-medium fs-15 w-150">Social:</span>
                            <ul class="ps-0 mb-0 list-unstyled d-flex">
                                <li>
                                    <a href="{{ $link_ig }}" target="_blank" class="bg-primary-transparent d-inline-block text-center rounded-1" style="width: 40px; height: 40px; line-height: 38px;">
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