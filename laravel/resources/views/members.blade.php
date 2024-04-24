@extends('layouts.template_main')

@section('content')

<!--=== Start User Area ===-->
<div class="card rounded-3 border-0 mb-24 table-edit-area">
    <div class="card-body text-body p-25">
        <div class="card-title d-sm-flex align-items-center justify-content-between mb-20 pb-20 border-bottom border-color">
            <h4 class="mb-3 mb-sm-0 text-center">All Members</h4>

            <div class="d-sm-flex align-items-center o-sortable">
                <form class="src-form position-relative z-1 mx-sm-3 mb-2 mb-sm-0">
                    <input type="text" class="form-control h-40" placeholder="Search Here">
                    <button class="bg-transparent position-absolute position-absolute top-50 end-0 translate-middle border-0 ps-0 pe-1">
                        <i data-feather="search" style="width: 20px;" class="text-body"></i>
                    </button>
                </form>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="member">
                <div class="global-table-area">
                    <div class="table-responsive overflow-auto">
                        <table class="table align-middle table-bordered" >
                            <thead class="text-dark">
                                <tr>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-body o-sortable">
                                @foreach($allMembers as $member):
                                <tr>
                                    <td>
                                        <a href="user.html#" class="d-flex align-items-center text-decoration-none">
                                            <img class="rounded-circle wh-50" src="{{ $member->photo_profile }}" alt="user-1">
                                            <div class="">
                                                <span class="fw-medium fs-15 ms-3 edit d-block text-dark">{{ $member->name }}</span>
                                            </div>
                                        </a>
                                    </td>
                                    <td>{{ $member->email }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <a href="{{ route('profile', ['email' => encrypt($member->email)]) }}" class="icon icon-a border-0 rounded-circle text-center bg-primary-transparent">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <form action="{{ route('deleteUser', ['id' => $member->id]) }}" method="POST" enctype="multipart/form-data">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button name="submit" class="icon border-0 rounded-circle text-center trash bg-danger-transparent delete-item">
                                                        <i data-feather="trash-2"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-sm-flex align-items-center justify-content-between text-center mt-25">
            <span class="fs-15 fw-medium text-dark mb-10 mb-sm-0 d-block">Items Per Page Show 10</span>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-custom m-0 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="user.html" aria-label="Previous">
                            <i class="ri-arrow-left-s-line"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="user.html">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="user.html">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="user.html">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="user.html" aria-label="Next">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--=== End User Area ===-->

@endsection