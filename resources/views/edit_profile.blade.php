@extends('layouts.template_main')

@section('content')
<!--=== Start Profile Edit Area ===-->
<div class="card rounded-3 border-0 create-product-card mb-24">
    <div class="card-body p-25">
        <div class="card-title mb-20 pb-20 border-bottom border-color">
            <h4 class="mb-2 mb-sm-0">Profile Info</h4>
        </div>

        <form action="{{ route('editProfile') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Email</label>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput3" value="{{ $email }}" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Name</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="name" value="{{ $name }}">
                            <label class="text-body fs-12" for="floatingInput">Edit Name</label>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Instagram</label>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="link_ig" value="{{$link_ig}}">
                            <label class="text-body fs-12" for="floatingInput">Edit URL Instagram</label>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Job</label>
                        <div class="form-floating">
                            <select class="form-select form-control" aria-label="Default select example" name="job">
                                @foreach($allJobs as $allJob):
                                    <option value="{{ $allJob }}" {{ $allJob === $job ? 'selected' : '' }}>{{ $allJob }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Bio</label>
                        <div class="wysiwyg-wrap">
                            <textarea name="bio" id="" cols="100" rows="14">{{ $bio }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group mb-25">
                        <label class="fw-semibold fs-14 text-dark mb-2">Upload Your Photo</label>
                    
                        <div class="avatar-upload">
                            <div class="avatar-preview rounded-circle">
                                <div id="imagePreview" style="background-image: url('{{ $photo_profile }}');" class="rounded-circle"></div>
                            </div>
                        </div>

                        <div class="file-upload-wrap border-1 rounded-3 mb-10">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file'  name="photo_profile" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="d-sm-flex">
                        <button type="submit" class="btn btn-primary active">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection