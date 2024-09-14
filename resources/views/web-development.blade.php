<x-layout>

<section>

    <!-- body -->
    <x-projects>
      <div class="container">
        <div style="margin-top: -20px" class="row mb-3">
          <p style="opacity: 40%" class="mb-5"><a class="text-secondary custom-link" href="/#projects">Projects</a> &raquo; <a class="text-secondary custom-link" href="">{{ $project->judul }}</a></p>  
          <div class="col text-center fw-light">
            <h2 class="font-judul">About {{ $project->judul }}</h2>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light pb-4">
              <p class="fs-6 fs-md-5 fs-lg-4 mb-5">{{ $project->desc }}</p>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light pb-5 mb-4">
              <p>Visit site : <a class="text-success custom-link" href="{{ $project->site }}" target="blank_">{{ $project->judul }}</a></p>
              <p>Source Code on <a class="text-success custom-link" href="{{ $project->url }}" target="blank_">Github.</a></p>
          </div>
        </div>
      </div>
    </x-projects>
    <!-- Akhir body -->

</section>

@extends('components.mobilealert')

</x-layout>