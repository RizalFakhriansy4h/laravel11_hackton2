@extends('layouts.template_main')

@section('content')
<!--=== Start Course List Area ===-->
<div class="card rounded-3 border-0 course-list-card mb-24 table-edit-area">
    <div class="card-body text-body p-25">
        <div class="card-title d-sm-flex align-items-center justify-content-between mb-20 pb-20 border-bottom border-color">
            <h4 class="mb-2 mb-sm-0">Courses List</h4>

            <div class="d-sm-flex align-items-center">
                <form class="src-form position-relative z-1 me-sm-3 mb-2 mb-sm-0">
                    <input type="text" class="form-control h-40" placeholder="Search Here">
                    <button class="bg-transparent position-absolute position-absolute top-50 end-0 translate-middle border-0 ps-0 pe-1">
                        <i data-feather="search" style="width: 20px;" class="text-body"></i>
                    </button>
                </form>
                <button type="button" class="btn btn-primary w-sm-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i data-feather="plus"></i>
                    Create New
                </button>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="member">

                <div class="global-table-area">
                    <div class="table-responsive overflow-auto">
                        <table class="table align-middle table-bordered" >
                            <thead class="text-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profil Image</th>
                                    <th scope="col">Profil Name</th>
                                    <th scope="col">Social Media</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-body o-sortable">
                                @foreach($allSpeakers as $speaker)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <a class="d-flex align-items-center text-decoration-none">
                                            <img class="rounded-circle wh-50" src="{{ $speaker->photo_profile }}" alt="course-6">
                                        </a>
                                    </td>
                                    <td>{{ $speaker->name }}</td>
                                    <td>{{ $speaker->social_media }}</td>
                                    <td>
                                        
                                        <a href="{{ route('edit-speaker',['id' => encrypt($speaker->id)]) }}" class="icon icon-a border-0 rounded-circle text-center bg-primary-transparent">
                                            <i data-feather="eye"></i>
                                        </a>

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
            <span class="fs-15 fw-medium text-dark mb-10 mb-sm-0 d-block">Items Per Page Show 12</span>
            <nav aria-label="Page navigation example">
                <ul class="pagination pagination-custom m-0 justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="courses.html" aria-label="Previous">
                            <i class="ri-arrow-left-s-line"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link active" href="courses.html">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="courses.html">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="courses.html">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="courses.html" aria-label="Next">
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--=== End Course List Area ===-->
<!-- Note Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Create New Speaker</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addSpeakers') }}" method="POST" enctype="multipart/form-data">
                     @csrf   
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Speaker Thumb:</label>
                        <input type="file" class="form-control" name="photo_profile">
                    </div>

                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Speaker Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Speaker Name" name="name">
                    </div>
                
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Social Media :</label>
                        <input type="text" class="form-control" placeholder="Enter Speaker Name" name="social_media">
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-danger border-0 me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary border-0" data-bs-dismiss="modal">Add Speaker</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection