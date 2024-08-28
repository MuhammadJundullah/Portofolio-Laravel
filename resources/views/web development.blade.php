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
              <p class="fs-6 fs-md-5 fs-lg-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem expedita quos a impedit libero dolorum architecto praesentium odit rerum id vel earum, ipsum asperiores delectus animi omnis debitis. Assumenda accusamus doloribus magnam excepturi. Optio ullam reprehenderit aliquid id temporibus dicta laudantium molestias nostrum deserunt culpa sint, ea magni qui atque, velit esse, praesentium cupiditate veniam porro. Illo, dolore non dolorem praesentium doloribus a, magni minima velit fugiat facere hic, suscipit quidem odio perspiciatis accusantium repudiandae accusamus dolor cupiditate harum eveniet id atque necessitatibus recusandae. Quas placeat consectetur quae voluptatum voluptatibus necessitatibus officia amet nihil nesciunt, vitae ab veniam ipsa laudantium.</p>
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