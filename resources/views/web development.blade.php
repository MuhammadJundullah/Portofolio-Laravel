<x-layout>

<section>

    <!-- body -->
    <section id="about" class="section-hidden">
      <div class="container">
        <div class="row text-center mb-3 mt-5">
          <div class="col fw-light">
            <h2 class="font-judul">{{ $project->judul }}</h2>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light pb-4">
              <p class="fs-6 fs-md-5 fs-lg-4">{{ $project->desc }}</p>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light mb-5 pb-5">
              <p>Visit site : <a class="text-success custom-link" href="{{ $project->site }}" target="blank_">{{ $project->judul }}</a></p>
              <p>Source Code : <a class="text-success custom-link" href="{{ $project->url }}" target="blank_">Github.</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir body -->


</section>

</x-layout>