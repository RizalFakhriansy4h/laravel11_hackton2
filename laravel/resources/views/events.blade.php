@extends('layouts.template_main')

@section('content')
<!--=== Start Course List Area ===-->
<div class="card rounded-3 border-0 course-list-card mb-24 table-edit-area">
    <div class="card-body text-body p-25">
        <div class="card-title d-sm-flex align-items-center justify-content-between mb-20 pb-20 border-bottom border-color">
            <h4 class="mb-2 mb-sm-0">Events List</h4>

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
                                    <th scope="col">Event</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Start</th>
                                    <th scope="col">End</th>
                                    <th scope="col">Speaker</th>
                                    <th scope="col">Creator</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-body o-sortable">
                                @foreach($allEvents as $event)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="" class="d-flex align-items-center text-decoration-none">
                                            <img class="rounded-circle wh-50" src="{{ $event->thumbnail }}" alt="course-6">
                                            <span class="fw-medium fs-15 ms-3 d-block">{{ $event->title }}</span>
                                        </a>
                                    </td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ $event->start_datetime }}</td>
                                    <td>{{ $event->end_datetime }}</td>
                                    <td>
                                        <ul>
                                            @foreach(json_decode($event->speakers_id) as $speaker_id)
                                            @php
                                                $speaker = \App\Models\Speaker::find($speaker_id);
                                            @endphp
                                            <li>
                                                <a href="courses.html#" class="d-flex align-items-center text-decoration-none">
                                                    <div class="">
                                                        <span class="fw-medium fs-15 ms-3 edit d-block">{{ $speaker->name }}</span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>{{ $event->creator->name }}</td>
                                    <td>
                                        <a href="{{ route('editEventView',['id' => encrypt($event->id)]) }}" class="icon icon-a border-0 rounded-circle text-center bg-primary-transparent">
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
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Create New Event</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addEvent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Event Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Event Name" name="title">
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Location :</label>
                                <input type="text" class="form-control" placeholder="Enter Event Name" name="location">
                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Event Thumb:</label>
                                <input type="file" class="form-control" name="thumbnail">
                            </div>
                        </div>

                    </div>
                    
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Event Description:</label>
                        <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Start :</label>
                                <input type="datetime-local" class="form-control" name="start_datetime">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">End :</label>
                                <input type="datetime-local" class="form-control" name="end_datetime">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker 1 Name:</label>
                                <div class="form-floating">
                                    <select class="form-select form-control" aria-label="Default select example" name="speaker1">
                                        <option value=""></option>
                                        @foreach($allSpeakers as $allSpeaker)
                                            <option value="{{$allSpeaker->id}}">{{$allSpeaker->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker 2 Name:</label>
                                <div class="form-floating">
                                    <select class="form-select form-control" aria-label="Default select example" name="speaker2">
                                        <option value=""></option>
                                        @foreach($allSpeakers as $allSpeaker)
                                            <option value="{{$allSpeaker->id}}">{{$allSpeaker->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker 3 Name:</label>
                                <div class="form-floating">
                                    <select class="form-select form-control" aria-label="Default select example" name="speaker3">
                                        <option value=""></option>
                                        @foreach($allSpeakers as $allSpeaker)
                                            <option value="{{$allSpeaker->id}}">{{$allSpeaker->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group mb-24">
                                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker 4 Name:</label>
                                <div class="form-floating">
                                    <select class="form-select form-control" aria-label="Default select example" name="speaker4">
                                        <option value=""></option>
                                        @foreach($allSpeakers as $allSpeaker)
                                            <option value="{{$allSpeaker->id}}">{{$allSpeaker->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-danger border-0 me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary border-0" data-bs-dismiss="modal">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection