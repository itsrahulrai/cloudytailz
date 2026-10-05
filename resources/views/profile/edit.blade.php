@extends('layouts.app')

@section('title', 'Profile - Dashboard |Cloudytailz')

@section('content')

    <div class="container mt-4 mb-5">

        <div class="row">
            <div class="col-lg-8 mx-auto">

                <h2 class="mb-4 fw-bold">
                    Profile
                </h2>


                <!-- Update Profile Information -->
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">
                            Update Profile Information
                        </h5>
                    </div>

                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>



                <!-- Update Password -->
                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">
                            Change Password
                        </h5>
                    </div>

                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>



                <!-- Delete Account -->
                {{-- <div class="card shadow-sm border-0">
                    <div class="card-header bg-white">
                        <h5 class="mb-0 text-danger">
                            Delete Account
                        </h5>
                    </div>

                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div> --}}


            </div>
        </div>

    </div>

@endsection
