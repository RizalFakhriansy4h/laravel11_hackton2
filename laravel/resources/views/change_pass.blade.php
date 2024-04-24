@extends('layouts.template_main')

@section('content')
<!--=== Start Password Change Area ===-->
<div class="card rounded-3 border-0 create-product-card mb-24">
    <div class="card-body p-25">
        <div class="card-title mb-20 pb-20 border-bottom border-color">
            <h4 class="mb-2 mb-sm-0">Security</h4>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="border border-color rounded-3 p-25">
                    <div class="card-title mb-30 pb-20 border-bottom border-color">
                        <h4 class="mb-2 mb-sm-0 fs-16 fw-semibold">Change Password</h4>
                    </div>
                    <form action="{{ route('changePass') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="fw-semibold fs-14 mb-2">Current Password <span class="text-danger">*</span></label>
                            <div class="form-floating position-relative">
                                <input type="password" class="form-control" id="password-field1" placeholder="Current Password" name="current_pass">
                                <label class="text-body fs-12" for="password-field1">Enter Current Password</label>
                                <span toggle="#password-field1" class="text-body ri-eye-line field-icon toggle-password position-absolute top-50 end-0 fs-20 translate-middle-y" style="right: 10px !important; cursor: pointer;"></span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="fw-semibold fs-14 mb-2">New Password <span class="text-danger">*</span></label>
                            <div class="form-floating position-relative">
                                <input type="password" class="form-control" id="password-field2" placeholder="New Password" name="new_pass">
                                <label class="text-body fs-12" for="password-field2">Enter New Password</label>
                                <span toggle="#password-field2" class="text-body ri-eye-line field-icon toggle-password position-absolute top-50 end-0 fs-20 translate-middle-y" style="right: 10px !important; cursor: pointer;"></span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="fw-semibold fs-14 mb-2">Confirm Password <span class="text-danger">*</span></label>
                            <div class="form-floating position-relative">
                                <input type="password" class="form-control" id="password-field3" placeholder="Confirm Password" name="confirm_pass">
                                <label class="text-body fs-12" for="password-field3">Enter Confirm Password</label>
                                <span toggle="#password-field3" class="text-body ri-eye-line field-icon toggle-password position-absolute top-50 end-0 fs-20 translate-middle-y" style="right: 10px !important; cursor: pointer;"></span>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <button type="submit" class="btn btn-primary rounded-1 w-100 py-3">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Password Change Area ===-->



@endsection