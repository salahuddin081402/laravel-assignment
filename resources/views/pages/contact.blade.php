@extends('layouts.app')
@section('title','Contact')
@section('content')
<section class="py-5">
  <div class="container" style="max-width:720px">
    <h2 class="mb-4">Contact</h2>
    <form>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control" type="text" placeholder="Your name">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" placeholder="you@example.com">
      </div>
      <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" rows="5" placeholder="Hi..."></textarea>
      </div>
      <button class="btn btn-primary" type="button">Send</button>
    </form>
  </div>
</section>
@endsection
