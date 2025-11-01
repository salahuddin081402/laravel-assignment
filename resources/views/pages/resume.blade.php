@extends('layouts.app')
@section('title','Resume')
@section('content')
<section class="resume-section py-5">
  <div class="resume-section-content container">

    <h1 class="mb-0">Salahuddin <span class="text-primary">Ahmed</span></h1>
    <div class="subheading mb-4">
      Dhaka, Bangladesh · <a href="mailto:you@example.com">salahuddin@example.com</a> · github.com/yourhandle
    </div>
    <p class="lead mb-5">
      Senior PHP/Laravel developer focused on scalable CRUD, clean migrations, and production-ready APIs.
      Strong in MySQL 8 indexing, Eloquent performance, queues, and CI/CD.
    </p>

    <h2 class="mb-3">Experience</h2>

    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
      <div class="flex-grow-1">
        <h3 class="mb-0">Senior PHP/Laravel Developer</h3>
        <div class="subheading mb-2">DhakaTech Ltd.</div>
        <ul class="mb-2">
          <li>Migrated legacy Blade to components, reduced template duplication by 60%.</li>
          <li>Designed MySQL 8 schemas with FKs and composite indexes for 50M+ rows.</li>
          <li>Built REST APIs with Sanctum, caching via Redis; improved p95 by 38%.</li>
          <li>Set up GitHub Actions → Ubuntu/Nginx zero-downtime deploys.</li>
        </ul>
        <div class="small text-muted">Stack: Laravel 11/12, PHP 8.2, MySQL 8, Redis, Horizon, Vue 3, Vite, Bootstrap 5.</div>
      </div>
      <div class="flex-shrink-0"><span class="text-primary">Jul 2022 – Present · Dhaka</span></div>
    </div>

    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
      <div class="flex-grow-1">
        <h3 class="mb-0">Backend Engineer</h3>
        <div class="subheading mb-2">Chittagong Softworks</div>
        <ul class="mb-2">
          <li>Built multi-tenant SaaS billing with role/permission guards and policies.</li>
          <li>Removed N+1 hotspots, added caching; feature tests for critical flows.</li>
        </ul>
        <div class="small text-muted">Stack: Laravel, Nova, MySQL, Redis, S3/MinIO, Docker, PHPUnit.</div>
      </div>
      <div class="flex-shrink-0"><span class="text-primary">Jan 2020 – Jun 2022 · Chattogram</span></div>
    </div>

    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
      <div class="flex-grow-1">
        <h3 class="mb-0">Junior Web Developer</h3>
        <div class="subheading mb-2">Rajshahi Web Studio</div>
        <ul class="mb-2">
          <li>Converted Bootstrap themes to Laravel Blade with layouts and partials.</li>
          <li>Delivered CRUD dashboards, auth, and basic reports for SMEs.</li>
        </ul>
        <div class="small text-muted">Stack: Laravel 5/6, jQuery, Bootstrap, MySQL.</div>
      </div>
      <div class="flex-shrink-0"><span class="text-primary">Aug 2017 – Dec 2019 · Rajshahi</span></div>
    </div>

    <h2 class="mb-3">Education</h2>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-4">
      <div class="flex-grow-1">
        <h3 class="mb-0">University of Dhaka</h3>
        <div class="subheading mb-3">B.Sc. in Computer Science & Engineering</div>
        <p>Relevant: Data Structures, Algorithms, DBMS, OS, Networks.</p>
      </div>
      <div class="flex-shrink-0"><span class="text-primary">2013 – 2017</span></div>
    </div>

    <h2 class="mb-3">Skills</h2>
    <ul class="fa-ul mb-4">
      <li><span class="fa-li"><i class="fas fa-check"></i></span>Laravel, PHP 8.x, Composer, PSR</li>
      <li><span class="fa-li"><i class="fas fa-check"></i></span>MySQL 8, query plans, indexing, migrations</li>
      <li><span class="fa-li"><i class="fas fa-check"></i></span>Eloquent performance, policies, form requests</li>
      <li><span class="fa-li"><i class="fas fa-check"></i></span>Queues (Horizon), Redis cache, events/jobs</li>
      <li><span class="fa-li"><i class="fas fa-check"></i></span>Bootstrap/Tailwind, Blade components</li>
      <li><span class="fa-li"><i class="fas fa-check"></i></span>Docker, Nginx, GitHub Actions</li>
    </ul>

    <h2 class="mb-3">Certifications</h2>
    <ul class="mb-0">
      <li>MySQL Performance Tuning — 2022</li>
      <li>REST API Design Fundamentals — 2021</li>
    </ul>

  </div>
</section>
@endsection
