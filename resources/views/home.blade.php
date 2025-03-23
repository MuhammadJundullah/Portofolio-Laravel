{{-- style="
        background-image: url('images/abu.jpeg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        position: relative;
        background-attachment: fixed;
        transform: translateY(0); */
        transition: background-position 0.2s ease-out;" --}}

<x-layout>

  <!-- Jumbotron -->
      <section>
        <div class="parallax"> 
          <div class="row mt-5 d-flex flex-column flex-md-row align-items-center text-center text-md-start">
            <div class="row mt-5 justify-content-enter align-items-center">
              <div class="col-12 col-lg-6 text-center text-lg-start">
                <img class="img-fluid rounded-circle w-70 d-block mx-auto mx-lg-auto" src="images/ahmad/ahmad-formal-almet-nobg.png" alt="me" style="margin-left: auto; margin-right: auto;">
              </div>
              <div class="col-12 col-lg-6 text-dark text-center text-lg-start">
                <h2 class="display-5 pt-md-5 mt-md-5 pt-5 font-monospace text-secondary">
                  <span id="typed-text"></span><span class="cursor">|</span>
                </h2>
                <h1 class="display-6 fw-bold text-judul">Sayid Muhammad Jundullah</h1>
                <p class="fs-4 fw-light">Web Developer | Data Enthusiast.</p>
                
                <!-- get sayid's resume -->
                {{-- <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://drive.google.com/file/d/1lwsONfgXmJMU714ltBliS5EJn3D04Nzi/view?usp=share_link" target="_blank">Get Sayid's CV &raquo</a></button>
                  <!-- <button type="button" class="btn btn-success"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://api.whatsapp.com/send?phone=6285766267769&text=Halo,%20apakah%20bisa%20membuat%20wesite%20untuk%20saya%20?">Whatsapp</a></button> -->
                </div> --}}
                
                <!-- akhir get sayid's resume -->

              </div>
            </div>
          </div>
        </div>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f8f9fa"
          fill-opacity="1"
          d="M0,96L48,90.7C96,85,192,75,288,85.3C384,96,480,128,576,165.3C672,203,768,245,864,245.3C960,245,1056,203,1152,181.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- About Me -->
    <section id="about" class="section-hidden bg-light" style="margin-top: -3px">
      <div class="container">
        <div class="row text-center mb-3 mt-5">
          <div class="col fw-light">
            <h1 class="font-judul fw-light">About Me</h1>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
               <p class="fs-5">
                  I am a 6th-semester Informatics student with an interest in web development and open to freelance projects. I have experience in web development using Laravel, React JS, Vue JS, as well as skills in data dashboarding using Tableau, Power BI, Google Looker Studio, and simple data prediction with Python for data analysis. I am willing to join a team to work while learning together.
                  {{-- <span class="more" style="display: none">To train my abilities in this regard, I have several projects that I work on, such as simple web assignments in lectures and contributing to finding solutions to business problems on the kaggle.com site based on data provided openly. I am willing to collaborate to solve problems in the field of data and web development. Currently, I am looking for internship opportunities to develop my skills and gain experience in the data field for positions such as Data Analyst, Data Scientist or web development such as Front End Web Developer, Back End Web Developer especially Laravel in a professional environment. If you need more information or want to convey opportunities for collaboration, do not hesitate to contact me. I will be happy to answer questions or provide additional information that you need. You can contact me through my social media below.</span> --}}
                  {{-- <a href="#" id="read-more" onclick="toggleText(event)">Read More...</a> --}}
              </p>
            <!-- Instagram -->
            <a class="sosmed" href="https://instagram.com/saed.m_" target="_blank"><img src="images/instagram.svg" alt="instagram" style="height: 30px; margin: 5%" /></a>
            <!-- twitter -->
            <a class="sosmed" href="https://sayidmuhammad15@gmail.com" target="_blank"><img src="images/mail.svg" alt="Email" style="height: 30px; margin: 5%" /></a>
            <!-- github -->
            <a class="sosmed" href="https://github.com/muhammadjundullah" target="_blank"><img src="images/github.svg" alt="github" style="height: 30px; margin: 5%" /></a>
            <!-- linkedin -->
            <a class="sosmed" href="https://linkedin.com/in/sayidm" target="_blank"><img src="images/linkedin.svg" alt="linkedin" style="height: 30px; margin: 5%" /></a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="projects" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">

          <div class="row text-center mt-5">
            <div class="col">
              <h1 class="font-judul fw-light">My Projects</h1>
            </div>
          </div>

        <div class="container mt-4">
          <div class="row g-3">
            @foreach ($projects as $project)

            <!-- Card Projects -->

             <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="card animate">
                    <div class="card-body">
                        <img class="img-fluid w-100 rounded" src="images/projects/{{$project->photo ?? 'project.webp'}}" alt="image">
                        <h5 class="card-title fw-light mt-2">{{ $project->judul }}</h5>
                        <p class="card-text fw-lighter text-secondary">{{ $project->category }}.</p>
                        <a class="text-success custom-link" href="/{{ $project->categoryslug }}/{{ $project->slug }}">Details &raquo;</a>                          
                    </div>
                </div>
            </div>

            <!-- Card Projects -->

            @endforeach
          </div>
        </div>
      </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#f8f9fa"
            fill-opacity="1"
            d="M0,192L48,202.7C96,213,192,235,288,240C384,245,480,235,576,208C672,181,768,139,864,128C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

    </section>

    <!-- Certificate Section -->
    <section id="certificate" class="section-hidden bg-light">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h1 class="font-judul fw-light">Certification</h1>
          </div>
        </div>

        <!-- items -->
        <div class="row ">

          @foreach ($certificates as $index => $certificate)

              <!-- Modal -->
              <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $index }}" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-body">
                              <img src="images/Certificate/{{ $certificate->name }}" class="img-fluid card-img-top" alt="Image">
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="mx-auto animate mb-3 " style="width: 18rem;">
                      <img class="card"  src="images/Certificate/{{ $certificate->name }}" alt="Image" data-toggle="modal" data-target="#imageModal{{ $index }}" style="width: 286px; cursor: pointer;">
                      <div class="card-body mt-3 mb-5">                    
                        <a class=" text-dark custom-link" href="{{ $certificate->site }}"><p class="card-text fw-light">{{ $certificate->desc }}</a> - <span class="text-secondary fst-italic">{{ $certificate->date }}</span>                    
                      </div>
                  </div>
              </div>

          @endforeach

        </div>
        <!-- akhir items -->

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir certificate -->

    <!-- Education -->
    <section id="education" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mb-3">
          <div class="col">
            <h1 class="font-judul fw-light">Education</h1>
          </div>
        </div>
          <div class="row justify-content-center">

            @foreach ( $educations as $education )

            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="mx-auto animate mb-3" style="width: 18rem;">
                <img src="images/Education/{{ $education->name }}" class="card-img-top" alt="Dqlab Certificate">
                <div class="card-body">
                  <hr>
                  <p class="fw-bold">{{ $education->school }}</p>
                  <p class="fst-italic">{{ $education->major }}</p>
                  <p class="fw-light">{{ $education->date }}</p>
                </div>
              </div>
            </div>

            @endforeach

          </div>
          <p style="margin:10px; margin-top: 100px;" class="fs-6 fw-lighter text-secondary text-center"><i>*This portfolio was last updated {{ $lastupdate->created_at->format('F j, Y, \a\t g:i A') }}.</i></p>    
        </div>
      </div>
    </section>

    <!-- Akhir Education -->

</x-layout>

<script>
  window.addEventListener("scroll", function() {
    let scrolled = window.scrollY;
    document.querySelector(".parallax").style.backgroundPositionY = +(scrolled * 0.3) + "px";
});

// animasi ngetik hello i'am
document.addEventListener("DOMContentLoaded", function() {
    const text = "Hello, I'm";
    const typedText = document.getElementById("typed-text");
    const cursor = document.querySelector(".cursor");
    let index = 0;

    function type() {
      if (index < text.length) {
        typedText.textContent += text.charAt(index);
        index++;
        setTimeout(type, 150); // Adjust typing speed here
      } else {
        setTimeout(erase, 1000); // Pause before erasing
      }
        }

    function erase() {
      if (index > 0) {
        typedText.textContent = text.substring(0, index - 1);
        index--;
        setTimeout(erase, 100); // Adjust erasing speed here
      } else {
        cursor.style.display = "inline"; // Show cursor again
        setTimeout(type, 500); // Pause before typing again
      }
        }

    type();
  });
</script>
