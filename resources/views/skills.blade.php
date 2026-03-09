@extends('layouts.content')

@section('content')

<h2 class="mb-5 text-center fw-bold">My Skills</h2>

<p class="text-center text-light opacity-75 mb-5">
Technologies and tools I use to build applications and games.
</p>

<div class="row g-4 m-4">

@foreach($skills as $skill)

<div class="col-md-4">

    <div class="skill-card h-100">

        <div class="d-flex justify-content-between mb-2">
            <h5 class="fw-semibold text-white mb-0">
                {{ $skill->skill }}
            </h5>

            <span class="skill-percent">
                {{ $skill->level }}%
            </span>
        </div>

        <div class="progress">
            <div class="progress-bar skill-bar"
                 style="--skill-width: {{ $skill->level }}%;">
            </div>
        </div>

    </div>

</div>

@endforeach

</div>

@endsection