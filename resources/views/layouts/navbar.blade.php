<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://kit.fontawesome.com/00730551fd.js" crossorigin="anonymous"></script>

  <style>
    * {
      font-family: 'Poppins', sans-serif;
      margin: 0%;
    }
  </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item p-1">
            <div class="bg-warning" style="border-radius:10px">
              <a class="nav-link" href="#" style="color: black;">Home</a>
            </div>
          </li>
          <li class="nav-item p-1">
            <div class="bg-warning" style="border-radius:10px">
              <a class="nav-link" href="#" style="color: black;">About</a>
            </div>
          </li>
          <li class="nav-item p-1">
            <div class="bg-warning" style="border-radius:10px">
              <a class="nav-link" href="#" style="color: black;">Experience</a>
            </div>
          </li>
          <li class="nav-item p-1">
            <div class="bg-warning" style="border-radius:10px">
              <a class="nav-link" href="#" style="color: black;">Skills and Certifications</a>
            </div>
          </li>
          <li class="nav-item p-1">
            <div class="bg-warning" style="border-radius:10px">
              <a class="nav-link" href="#" style="color: black;">Education</a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <section id="header" class="mt-5 p-5">
    <div id="loader">
      <center>
        <img src="gif/loader.gif" alt="" width="100px" class="shadow" style="border-radius: 100%;">
        <p class="mt-3">Please wait, data is still on the way</p>
      </center>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 p-5" id="profil_information">
        </div>
        <div class="col-md-4 p-2" id="profil_picture"></div>
      </div>
  </section>

  <section id="contact" class="bg-dark" style="width: 100%;">
    <div class="container p-5">
      <div class="row mt-3 mb-3 justify-content-center m-auto">
        <center>
          <h3 class="mb-4" style="color: white;"><b>Let's Connected !</b></h3>
        </center>
        <div class="col-md-1">
          <center><a target="_blank" class="social-media btn btn-dark btn-outline-light btn-lg btn-floating mt-2 shadow"
              style="border-radius: 100px" href="https://github.com/MuhammadAlfariziTazkia" role="button">
              <i class="fab fa-github"></i>
            </a></center>
        </div>
        <div class="col-md-1">
          <center><a target="_blank" class="social-media btn btn-dark btn-outline-light btn-lg btn-floating mt-2 shadow"
              style="border-radius: 100px" href="https://www.linkedin.com/in/muhammad-alfarizi-tazkia/" role="button">
              <i class="fab fa-linkedin"></i>
            </a></center>
        </div>
        <div class="col-md-1">
          <center><a target="_blank" class="social-media btn btn-dark btn-outline-light btn-lg btn-floating mt-2 shadow"
              style="border-radius: 100px" href="https://www.instagram.com/muhammadalfarizi.t/" role="button">
              <i class="fab fa-instagram"></i>
            </a></center>
        </div>
        <div class="col-md-1">
          <center><a target="_blank" class="social-media btn btn-dark btn-outline-light btn-lg btn-floating mt-2 shadow"
              style="border-radius: 100px"
              href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMTSDxNzdpLqxPjVkSSlpzCTCtZtVlkgTWcJhCCMJJzndGwBvtnnppLWlTtRDKlXhbtHGzk"
              role="button">
              <i class="far fa-envelope"></i>
            </a></center>
        </div>
        <div class="col-md-1">
          <center><a target="_blank" class="social-media btn btn-dark btn-outline-light btn-lg btn-floating mt-2 shadow"
              style="border-radius: 100px"
              href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMTSDxNzdpLqxPjVkSSlpzCTCtZtVlkgTWcJhCCMJJzndGwBvtnnppLWlTtRDKlXhbtHGzk"
              role="button">
              <i class="fa-brands fa-youtube"></i>
            </a></center>
        </div>
      </div>
    </div>
  </section>

  <section id="personal_summary" class="mt-4 p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <center>
            <img src="img/figure.png" alt="" width="95%">
          </center>
        </div>
        <div class="col-md-8">
          <div class="container">
            <h1>
              <b>
                Who am I?
              </b>
            </h1>
            <p class="mt-3" style="font-size: 13pt;" id="personal_summary_content">

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="project_and_work" class="bg-dark" style="color: white;">
    <div class="container p-5">
      <div class="row">
        <div class="col-md-6" id="work">
          <h2>Work Experience</h2>
          <div class="mt-4" style="overflow-y: scroll; overflow-x: hidden;height: 500px; scrollbar-color: black black;"
            id="work_content">
          </div>
        </div>
        <div class="col-md-6" id="project">
          <h2>Project Experience</h2>
          <div class="mt-4" style="overflow-y: scroll; overflow-x: hidden;height: 500px; scrollbar-color: black black;"
            id="project_content">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skill_and_certificate">
    <div class="container p-5 mt-5">
      <div class="row">
        <div class="col-md-6" id="skill">
          <h2><b>My Skills</b></h2>
          <div class="mt-4" style="overflow-y: scroll; overflow-x: hidden;height: 500px; scrollbar-color: black black;"
            id="skills_content">
          </div>
        </div>
        <div class="col-md-6" id="certificate">
          <h2>Certifications</h2>
          <div class="mt-4" style="overflow-y: scroll; overflow-x: hidden;height: 500px; scrollbar-color: black black;"
            id="certificate_content">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="education" class="bg-dark p-5" style="color: white;">
    <center>
      <div class="container" id="education_content">
        <h1>
          My Education
        </h1>
      </div>
    </center>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script>
    loadSkills();
    loadCertificates();
    loadEducation();
    loadProjects();
    loadWorks();
    loadProfil();
    function loadProfil() {
      let request = new XMLHttpRequest();
      request.open("GET", "https://m-alfarizi-tazkia-porto.herokuapp.com/api/profil");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          $("#loader").remove()
          let profil = JSON.parse(request.response);
          console.log(profil);

          let button_download_cv = "<button class='btn btn-dark mt-4 shadow p-2'> Download CV </button>"

          let profil_information = `<h1>Holla !</h1>`
          profil_information += `<h1> I am <b> ${profil.name} </b> </h1>`
          profil_information += `<h2 class="mt-3"> ${profil.bio} </h2>`
          profil_information += button_download_cv

          let profil_image = `<img src='img/${profil.image}' width=350 height=350>`

          $("#profil_information").append(profil_information);
          $("#profil_picture").append(profil_image)
          $("#personal_summary_content").append(profil.personal_summary)
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }

      };
    }
    function loadSkills() {
      let request = new XMLHttpRequest();
      request.open("GET", "https://m-alfarizi-tazkia-porto.herokuapp.com/api/skills");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          let skills = JSON.parse(request.response);

          $("#skills_content").append(`<div class="row p-3"><div class="col-md-3">  <img src="img/figure.png" alt="" width="100%"></div><div class="col-md-9">  <h4 class="mt-2"><b>JavaScript</b></h4><div class="progress mt-3 bg-dark shadow" style="width: 75%;">    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>`)
          console.log(skills);
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }
      };
    }
    function loadProjects() {
      let request = new XMLHttpRequest();
      request.open("GET", "https://m-alfarizi-tazkia-porto.herokuapp.com/api/project");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          let projects = JSON.parse(request.response);

          projects.forEach(project => {
            $("#project_content").append(`<div class="row mb-2"><hr><div class="col-md-3"><img src="img/figure.png" alt="" width="100%"></div><div class="col-md-9"><h4><b>${project.name}</b></h4><h6>${project.position}</h6><h6>${project.time}</h6></div></div>`)
          });

          $("#project_content").append("<hr>")
          console.log(projects);
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }
      };
    }
    function loadWorks() {
      let request = new XMLHttpRequest();
      request.open("GET", "http://m-alfarizi-tazkia-porto.herokuapp.com/api/work");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          let work = JSON.parse(request.response);
          console.log(work);
          $("#work_content").append(`<div class="row mb-2"><hr><div class="col-md-3"><img src="img/figure.png" alt="" width="100%"></div><div class="col-md-9"><h4><b>LingoTalk Indonesia </b></h4><h6>Backend Engineer Intern</h6><h6>June 2021 - Oct 2021</h6></div></div>`)
          $("#work_content").append("<hr>")
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }
      };
    }
    function loadCertificates() {
      let request = new XMLHttpRequest();
      request.open("GET", "http://m-alfarizi-tazkia-porto.herokuapp.com/api/certificate");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          let certificates = JSON.parse(request.response);
          console.log(certificates);

          certificates.forEach(certificate => {
            $("#certificate_content").append(`<div class="row mb-3"><hr><div class="col-md-3"><img src="img/figure.png" alt="" width="100%"></div><div class="col-md-9"><h4><b>TensorFlow Developer Certification</b></h4>  <h6><b>Issued By TensorFlow</b></h6><h6><i>Machine Learning Development</i></h6><h6>Expired on 2022</h6><button class="btn btn-dark mt-2 shadow">See Credentials</button></div></div>`)
          });
          $("#certificate_content").append("<hr>")
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }
      };
    }
    function loadEducation() {
      let request = new XMLHttpRequest();
      request.open("GET", "http://m-alfarizi-tazkia-porto.herokuapp.com/api/education");
      request.send();
      request.onload = () => {
        if (request.status === 200) {
          let education = JSON.parse(request.response);

          $("#education_content").append(`<hr class="mt-4"><h5 class="mt-4">Sumatera Institute of Technology</h5><h6>Computer Science</h6>`)
          $("#education_content").append("<hr class='mt-4'>")
          console.log(education);
        } else {
          console.log("Page not found"); // if link is broken, output will be page not found
        }
      };
    }
  </script>

</body>

</html>
