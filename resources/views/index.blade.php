<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Anass Ait Ouaguerd</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />
    <link
      href="/assets/vendor/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link href="/assets/vendor/devicons/css/devicons.min.css" rel="stylesheet" />
    <link
      href="/assets/vendor/simple-line-icons/css/simple-line-icons.css"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="/assets/css/resume.min.css" rel="stylesheet" />
    <link href="/assets/css/main.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
      id="sideNav"
    >
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Start Bootstrap</span>
        <span class="d-none d-lg-block">
          <img
            class="img-fluid img-profile rounded-circle mx-auto mb-2"
            src="/assets/img/{{$informations->image}}"
            alt="Anass Ait Ouaguerd"
          />
        </span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience"
              >Projects</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education"
              >Education</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cv">Download CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#cantact">Contact - Me</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
              {{$informations->name}}
            <span class="text-primary">{{$informations->last_name}}</span>
          </h1>
          <div class="subheading mb-5"> 
          </div>
          <p class="mb-5">
            {{$informations->summary}}
          </p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="{{$informations->social->gmail}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="mt-3 bi bi-envelope fa-stack-1x fa-inverse" viewBox="0 0 16 16">
                      <path d="M14.83 0H1.17C.52 0 0 .53 0 1.2v13.6C0 15.47.52 16 1.17 16h13.66c.65 0 1.17-.53 1.17-1.2V1.2C16 .53 15.48 0 14.83 0zM8 9.27L1.2 4h13.6L8 9.27zm6.65-1.43L8 11.73 1.35 7.84 1.17 7.76A.25.25 0 0 1 1 7.6v-.05L7.73 12l.007.005a.251.251 0 0 0 .253 0L14 7.55v.05a.25.25 0 0 1-.16.18z"/>
                    </svg>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{$informations->social->linkedin}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{$informations->social->github}}">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section
        class="resume-section p-3 p-lg-5 d-flex flex-column"
        id="experience"
      >
        <div class="my-auto">
          <h2 class="mb-5">Projects</h2>
          @if (!empty($informations->projects))
          @foreach ($informations->projects as $projects)
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
                <h3 class="mb-0">{{$projects->name}}</h3>
                <p>
                  {{$projects->description}}
                </p>
                <a href="{{$projects->link}}">
                <p>
                  Link Github : {{$projects->link}}
                </p>
                </a>
            </div>
        </div>
        @endforeach
        @else
        <div class="d-flex flex-column flex-md-row font-weight-bold mb-5 resume-item">
            No Projects !!
        </div>
        @endif

        </div>
      </section>

      <section
        class="resume-section p-3 p-lg-5 d-flex flex-column"
        id="education"
      >
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>
        @foreach ($informations->education as $education)
        <div class="resume-item d-flex flex-column flex-md-row mb-5">
          <div class="resume-content mr-auto">
            <h3 class="mb-0">{{$education->company}}</h3>
            <div class="subheading mb-3">{{$education->location}}</div>
            <div>{{$education->title}}</div>  
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">{{$education->date}}</span>
          </div>
        </div>
        @endforeach
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5 title" data-title="HTML 5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3 title" data-title="CSS"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript title" data-title="Javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap title" data-title="Bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-php title" data-title="PHP"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-laravel title" data-title="Laravel"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-react title" data-title="React"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-mysql title" data-title="Mysql"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-mongodb title" data-title="Mongodb"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-docker title" data-title="Docker"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-git title" data-title="Git"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-github title" data-title="Github"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-database title" data-title="Database"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-aws title" data-title="AWS"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-trello title" data-title="Trello"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jira title" data-title="Jira"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Project Planning and Requirement Gathering
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Design and Prototyping
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Browser Testing &amp; Debugging
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Database Design and Management
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Testing and Quality Assurance
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Documentation and Knowledge Sharing
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Continuous Learning and Skill Development
            </li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Agile Development &amp; Scrum
            </li>
          </ul>
        </div>
      </section>
      <section
      class="resume-section p-3 p-lg-5 d-flex flex-column"
      id="cv"
    >
      <div class="my-auto" style="
      margin: 33%;
  ">
        <h2 class="mb-5">Download My CV</h2>
        <a href="/Generate-PDF">

        <button class="badge bg-primary p-3 text-light w-100 mt-2" style="cursor: pointer">
          download My CV
        </button>
      </a>

      </div>

    </section>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- Custom scripts for this template -->
    <script src="/assets/js/resume.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
