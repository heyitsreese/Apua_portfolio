@extends('layouts.content')

@section('content')

<h2 class="mb-5 text-center fw-bold">Experience</h2>

<p class="text-center text-light opacity-75 mb-5">
My academic, leadership, and technical experiences.
</p>

<div class="row g-4 m-4">

    @foreach($experiences as $exp)

    <div class="col-md-6">

        <div class="experience-card">

            <h5 class="fw-semibold text-white">
                {{ $exp->company }}
            </h5>

            <h6 class="text-light opacity-75 mb-1">
                {{ $exp->position }}
            </h6>

            <span class="text-secondary">
                {{ $exp->duration }}
            </span>

            <p class="text-light opacity-75 mt-2">
                {{ $exp->description }}
            </p>
        </div>

    </div>
    @endforeach
</div>

@endsection