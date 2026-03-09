@extends('layouts.content')

@section('content')

<h2 class="mb-5 text-center fw-bold">Contact</h2>

<p class="text-center text-light opacity-75 mb-5">
Feel free to reach out for collaboration, opportunities, or questions.
</p>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="contact-card text-center">

<h5 class="text-white mb-4">Get in Touch</h5>

<div class="contact-item">
<i class="fa-solid fa-envelope"></i> <a href="mailto: {{ $contact->email }}"><span>Email</span></a>
</div>

<div class="contact-item">
<i class="fa-brands fa-github"></i> <a href="{{ $contact->github }}"><span>Github</span></a>
</div>

<div class="contact-item">
<i class="fa-brands fa-linkedin"></i> <a href="{{ $contact->linkedin }}"><span>LinkedIn</span></a>
</div>

<div class="contact-item">
<i class="fa-solid fa-phone"></i> <a href="tel:{{ $contact->phone }}"><span>Phone Number</span></a>
</div>

<div class="contact-item">
<i class="fa-solid fa-map-pin"></i> <span>{{ $contact->location }}</span>
</div>

@if($contact->alt_email)
<div class="contact-item">
✉️ <span>{{ $contact->alt_email }}</span>
</div>
@endif

</div>

</div>

</div>

@endsection