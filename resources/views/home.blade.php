@extends('layouts.content')

@section('content')

<div class="hero-wrapper p-5 shadow-sm">

    <div class="row align-items-center">

        <div class="col-md-6 text-center text-md-start">
            <h1 class="display-4 fw-bold">
                {{ $profile->name }}
            </h1>

            <h5 class="text-white mt-3">
                {{ $profile->title }}
            </h5>

            <p class="mt-4 text-light">
                {{ $profile->bio }}
            </p>

            <div class="mt-4">
                <a href="/projects" class="btn btn-light btn-lg me-3 px-4">
                    View Projects
                </a>

                <a href="/contact" class="btn btn-outline-light btn-lg px-4">
                    Contact
                </a>
            </div>
        </div>

        <div class="col-md-6 text-center mt-5 mt-md-0">
            <img src="{{ asset('images/profile.jpg') }}"
                 class="img-fluid rounded-4 shadow-sm"
                 style="max-width: 380px;"
                 alt="Profile Image">
        </div>

    </div>

</div>

@endsection