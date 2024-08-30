<x-layout>

<section>

    <!-- body -->
    <section id="about" class="section-hidden" style="margin-top: -50px">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col fw-light">
            <h2 class="font-judul">About {{ $project->judul }}</h2>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
              <p class="fs-6 fs-md-5 fs-lg-4">{{ $project->desc }}</p>
          </div>
        </div>
        <hr>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
              <h2 class="font-judul">Dashboard Visualisasi</h2>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">

          {!! $project->site !!}

        </div>
        <p>Notebook : <a class="text-success custom-link" href="{{ $project->url }}" target="_blank">Github.</a></p>
      </div>
    </section>
    <!-- Akhir body -->

</section>

@extends('components.mobilealert')

</x-layout>