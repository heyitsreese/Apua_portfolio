<!-- @extends('layouts.content')

@section('title', 'Projects')

@section('content')

<div class="container">
    <h1>Create Project</h1>
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Project Title</label>
            <input type="text" class="form-control" name="title">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label>Tech Stack</label>
            <input type="text" class="form-control" name="tech_stack"></textarea>
        </div>

        <button class="btn btn-success">Save Project</button>
    </form>
</div> -->