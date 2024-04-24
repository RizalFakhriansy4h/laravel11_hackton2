@extends('layouts.template_main')

@section('content')
<div class="card rounded-3 border-0 create-product-card mb-24">
    <div class="card-body p-25">
        <form action="{{ route('editEvent', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                
                <div class="col">
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Event Name:</label>
                        <input type="text" class="form-control" name="title" value="{{ $event->title }}">
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Location :</label>
                        <input type="text" class="form-control" name="location" value="{{ $event->location }}">
                    </div>
                </div>
                
                <div class="col">
                    <img src="{{ $event->thumbnail }}" alt="{{ $event->title }}" height="100" width="300">
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Event Thumb:</label>
                        <input type="file" class="form-control" name="thumbnail" value="{{ $event->thumbnail }}">
                    </div>
                </div>

            </div>
            
            <div class="form-group mb-24">
                <label class="mb-10 fs-14 text-dark fw-semibold">Event Thumb:</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $event->description }}</textarea>
            </div>
            
            <div class="row">
                <div class="col">
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">Start :</label>
                        <input type="datetime-local" class="form-control" name="start_datetime" value="{{ $event->start_datetime }}">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group mb-24">
                        <label class="mb-10 fs-14 text-dark fw-semibold">End :</label>
                        <input type="datetime-local" class="form-control" name="end_datetime" value="{{ $event->end_datetime }}">
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
                <button type="submit" class="btn btn-primary border-0 me-3" data-bs-dismiss="modal">Edit Event</button>
                </form>
                <form action="{{ route('deleteEvent', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger border-0" data-bs-dismiss="modal">Delete Event</button>
                </form>
            </div>
    </div>
</div>

@endsection