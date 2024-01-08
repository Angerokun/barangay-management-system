@extends('layouts.app')

@section('content')
<div class="py-6">
    <!-- Page Content -->
    <div class="content content-full content-boxed">
    <div class="block block-rounded">
        <div class="block-content">
        <form action="be_pages_projects_edit.php" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <!-- User Profile -->
            <h2 class="content-heading pt-0">
            <i class="fa fa-fw fa-user-circle text-muted me-1"></i>Personal Information
            </h2>
            <div class="row push">
            <div class="col-lg-4">
                <p class="text-muted">
                Your Profile vital info. Your username will be publicly visible.
                </p>
            </div>
            <div class="col-lg-12 col-xl-8">
                <div class="mb-4">
                <label class="form-label" for="dm-profile-edit-avatar">Choose a new avatar</label>
                <input class="form-control" type="file" id="dm-profile-edit-avatar">
                </div>
                <div class="row mb-4">
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-firstname">Last Name</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" placeholder="Dela Cruz">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">First Name</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Juan">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">Middle Name</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Santos">
                </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-name">Mobile Number</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" >
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-firstname">Email Address (Optional)</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                    </div>
                </div>
                <div class="mb-4">
                <label class="form-label" for="dm-profile-edit-email">Birth Date</label>
                <input type="date" class="form-control" id="dm-profile-edit-email" name="dm-profile-edit-email" placeholder="" value="">
                </div>
                <div class="mb-4">
                    <label class="form-label">Gender</label>
                    <div class="space-x-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="example-radios-inline1" name="example-radios-inline" value="option1">
                        <label class="form-check-label" for="example-radios-inline1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="example-radios-inline2" name="example-radios-inline" value="option2">
                        <label class="form-check-label" for="example-radios-inline2">Female</label>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-name">Citizenship</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" >
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-firstname">Civil Status</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-name">Height</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" >
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="dm-profile-edit-firstname">Weight</label>
                        <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Classification</label>
                    <div class="space-y-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1" checked>
                        <label class="form-check-label" for="example-checkbox-default1">Are you a Senior Citizen?</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default1" name="example-checkbox-default1">
                        <label class="form-check-label" for="example-checkbox-default1">Are you Registered Voters?</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="example-checkbox-default2" name="example-checkbox-default2">
                        <label class="form-check-label" for="example-checkbox-default2">PWDs</label>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- END User Profile -->

            <!-- Billing Information -->
            <h2 class="content-heading pt-0">
            <i class="far fa-fw fa-map text-muted me-1"></i> Address Information
            </h2>
            <div class="row push">
            <div class="col-lg-4">
                <p class="text-muted">
                Your Address information is never shown to other users and only used for profiling Records.
                </p>
            </div>
            <div class="col-lg-8 col-xl-8">
                <label class="form-label" >Permanent Address</label>
                <div class="row mb-4">
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-firstname">Unit/House No./Blk No.</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" placeholder="Dela Cruz">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">Street Name</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Juan">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">Bldg/Subdivision</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Santos">
                </div>
                </div>
                <div class="row mb-4">
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-firstname">Province</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                </div>
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-lastname">City/Municipality</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
                </div>
                </div>
                <div class="row mb-4">
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-firstname">Barangay</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                </div>
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-lastname">Zip Code</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
                </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Current Address</label>
                    <div class="space-x-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1" checked>
                        <label class="form-check-label" for="example-checkbox-inline1">Same as Permanent Address</label>
                    </div>
                    </div>
                </div>
                <div class="row mb-4">
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-firstname">Unit/House No./Blk No.</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname" placeholder="Dela Cruz">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">Street Name</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Juan">
                </div>
                <div class="col-4">
                    <label class="form-label" for="dm-profile-edit-lastname">Bldg/Subdivision</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname" placeholder="Santos">
                </div>
                </div>
                <div class="row mb-4">
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-firstname">Province</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                </div>
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-lastname">City/Municipality</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
                </div>
                </div>
                <div class="row mb-4">
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-firstname">Barangay</label>
                    <input type="text" class="form-control" id="dm-profile-edit-firstname" name="dm-profile-edit-firstname">
                </div>
                <div class="col-6">
                    <label class="form-label" for="dm-profile-edit-lastname">Zip Code</label>
                    <input type="text" class="form-control" id="dm-profile-edit-lastname" name="dm-profile-edit-lastname">
                </div>
                </div>
            </div>
            </div>
            <!-- END Billing Information -->

            <!-- Submit -->
            <div class="row push"
            <div class="col-lg-8 col-xl-5 offset-lg-4">
                <div class="mb-4">
                <button type="submit" class="btn btn-alt-primary">
                    <i class="fa fa-check-circle opacity-50 me-1"></i> Create Profile
                </button>
                </div>
            </div>
            </div>
            <!-- END Submit -->
        </form>
        </div>
    </div>
    </div>
    <!-- END Page Content -->
</div>
@endsection