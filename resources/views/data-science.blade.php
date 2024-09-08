<x-layout>

<section>

    <!-- body -->
    <x-projects>
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
        {{-- <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
              <h2 class="font-judul">Dashboard Visualization</h2>
          </div>
        </div> --}}
        <div class="row text-center fs-5 justify-content-around mb-5">

          {!! $project->site !!}

        </div>
        {{-- <div class="row text-center mb-3">
          <div class="col fw-light">
            <h2 class="font-judul">Lets Predict</h2>
          </div>
        </div> --}}
        {{-- <div class="row text-center mb-3"> --}}

         {{-- start form --}}
          {{-- <div class="row justify-content-center">
            <div class="col-4 align-self-center mt-5 pt-5">
              <form method="post">

                  @foreach ($predicts as $predict)
                      <div class="mb-3">
                          <label for="{{ $predict->slug_1 }}" class="form-label">{{ $predict->attributs_1 }}</label>
                          <input type="text" class="form-control" name="{{ $predict->slug_1 }}" id="{{ $predict->slug_1 }}" autofocus>
                      </div>
                  @endforeach

                  <button type="submit" class="btn btn-success" name="tombol">Predict !</button>
              </form>

            </div>
          </div> --}}
          {{-- akhir form --}}

          <!-- Jika ada hasil prediksi, tampilkan di sini -->
          {{-- @if(isset($prediction))
              <h2>Hasil Prediksi:</h2>
              <p>{{ $prediction }}</p>
          @endif
          
        </div> --}}
        <p>*Notebook analysis on <a class="text-success custom-link" href="{{ $project->url }}" target="_blank">Github.</a></p>
      </div>
    </x-projects>
    <!-- Akhir body -->

</section>

@extends('components.mobilealert')

</x-layout>