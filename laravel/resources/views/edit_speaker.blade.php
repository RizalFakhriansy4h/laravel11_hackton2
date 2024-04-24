@extends('layouts.template_main')

@section('content')
<div class="card rounded-3 border-0 create-product-card mb-24">
    <div class="card-body p-25">
        <form action="{{ route('editSpeaker', ['id' => $speaker->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mb-24">
                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $speaker->name }}">
            </div>
        
            <div class="form-group mb-24">
                <label class="mb-10 fs-14 text-dark fw-semibold">Social Media :</label>
                <input type="text" class="form-control" name="social_media" value="{{ $speaker->social_media }}">
            </div>

            <img src="{{ $speaker->photo_profile }}" alt="{{ $speaker->name }}" width="200" height="200">
            <div class="form-group mb-24">
                <label class="mb-10 fs-14 text-dark fw-semibold">Speaker Thumb:</label>
                <input type="file" class="form-control" name="photo_profile">
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary border-0" data-bs-dismiss="modal">Edit Speaker</button>
                    </form>
                </div>
                <div class="col">
                    <form action="{{ route('deleteSpeaker', ['id' => $speaker->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger border-0" data-bs-dismiss="modal">Delete Speaker</button>
                    </form>
                </div>
            </div>
    </div>
</div>


@endsection