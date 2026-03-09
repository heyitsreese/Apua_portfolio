@extends('layouts.content')

@section('content')

<h2 class="mb-5 text-center fw-bold text-white">Projects</h2>

<p class="text-center text-light opacity-75 mb-5">
Some of the projects I have worked on involving web development and game design.
</p>

<div class="row g-4 m-4">

    @foreach($projects as $project)

    <div class="col-md-6">

        <div class="project-card h-100">

            <div class="project-image mb-3">

                @if($project->images->count())
                <img src="{{ asset('images/'.$project->images->first()->image) }}"
                class="img-fluid rounded-3 project-img"
                data-bs-toggle="modal"
                data-bs-target="#projectModal"
                data-project="{{ $project->id }}"
                style="cursor:pointer;">
                @else
                <div class="project-placeholder">Project Image</div>
                @endif

            </div>

            <h5 class="text-white fw-semibold">
            {{ $project->title }}
            </h5>

            <p class="text-light opacity-75 mt-2">
            {{ $project->description }}
            </p>

            @if($project->link)
            <a href="{{ $project->link }}" target="_blank" class="btn btn-light btn-sm mt-3">
            View Project
            </a>
            @endif

        </div>

    </div>

    @endforeach
</div>
<div id="project-data"
     data-images='@json($projects->mapWithKeys(fn($p) => [$p->id => $p->images->pluck("image")]))'>
</div>
    <div class="modal fade" id="projectModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content bg-dark border-0">

                <div class="modal-body">

                    <div id="projectCarousel" class="carousel slide">

                        <div class="carousel-inner" id="carouselImages"></div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const projectImages = JSON.parse(
        document.getElementById("project-data").dataset.images
    );

    const images = document.querySelectorAll(".project-img");
    const carouselInner = document.getElementById("carouselImages");

    images.forEach(img => {

        img.addEventListener("click", function () {

            const projectId = this.dataset.project;
            const gallery = projectImages[projectId] || [];

            carouselInner.innerHTML = "";

            gallery.forEach((image, index) => {

                const active = index === 0 ? "active" : "";

                carouselInner.innerHTML += `
                    <div class="carousel-item ${active}">
                        <img src="/images/${image}" class="d-block w-100 rounded">
                    </div>
                `;

            });

        });

    });

});

</script>
@endsection