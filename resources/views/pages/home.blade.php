@extends('layouts.app')
@section('title','Home')
@section('content')
<section class="py-5 bg-light">
  <div class="container text-center">
    <img src="{{ asset('assets/template/assets/profile.png') }}" alt="Profile" width="160" height="160" class="rounded-circle shadow">
    <h1 class="mt-4 mb-2">Your Name</h1>
    <p class="text-muted mb-4">Short tagline or role</p>
    <a href="{{ route('projects') }}" class="btn btn-primary me-2">View Projects</a>
    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact</a>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <h2 class="mb-4">About</h2>
    <p>Replace this paragraph with your template content. Keep static for the assignment.</p>
    <div class="row g-4 mt-1">
      <div class="col-md-4"><div class="p-4 border rounded-3 h-100"><h5>Skill A</h5><p class="mb-0">Brief text.</p></div></div>
      <div class="col-md-4"><div class="p-4 border rounded-3 h-100"><h5>Skill B</h5><p class="mb-0">Brief text.</p></div></div>
      <div class="col-md-4"><div class="p-4 border rounded-3 h-100"><h5>Skill C</h5><p class="mb-0">Brief text.</p></div></div>
    </div>
  </div>
</section>
@endsection
