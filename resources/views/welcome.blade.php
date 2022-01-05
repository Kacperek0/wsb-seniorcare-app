<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SeniorCare</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link href="sticky-footer-navbar.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">


    </head>


    <body>

    <nav class="navbar fixed-top navbar-expand-lg bg-info text-uppercase" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-white" href="#seniorcare"><strong>SeniorCare</strong></a>
                <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi bi-menu-up"></i>
                </button>
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarResponsive">
                    <ul class="navbar-nav navbar-light">
                    @if (Route::has('login'))
                        <div class="collapse navbar-collapse flex-row-reverse" id="navbarResponsive">
                        <ul class="navbar-nav navbar-light">
                        @auth
                        <li class="nav-item mx-0 mx-lg-1"><a href="{{ url('/home') }}" class="nav-link py-3 px-0 px-lg-3 text-light">Home</a>
                        @else
                        <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('login') }}" class="nav-link py-3 px-0 px-lg-3 text-light">Log in</a>
                        @if (Route::has('register'))
                        <li class="nav-item mx-0 mx-lg-1"><a href="{{ route('register') }}" class="nav-link py-3 px-0 px-lg-3 text-light">Register</a>
                        @endif
                        @endauth
                        </ul>
                        </div>
                    @endif

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-light" href="#about"><strong>About</strong></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 text-light" href="#contact"><strong>Contact</strong></a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="seniorcare" class="page-section bg-light text-muted mb-0 pt-5" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h1 class="page-section-heading text-center text-dark pt-5 pb-2">SeniorCare</h1>

                <img src="https://wsb-seniorcare-app.s3.eu-west-1.amazonaws.com/volunteer.png" class="rounded">
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-12 ms-auto text-center mt-4 pb-5"><p><em><h2>
                        <h1>We are happy to help!</h1>
                    </h2></em></p></div>
                </div>
            </div>
        </section>

        <section id="about" class="page-section bg-light text-muted mb-0 pt-5" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h1 class="page-section-heading text-center text-dark pt-5 pb-2">About SeniorCare</h1>
                <!-- About Section Content-->
                <div class="row mt-4 pb-5">
                    <div class="col-lg-12 ms-auto text-center mt-4 pb-5"><p><em><h2>
                        SeniorCare to platforma zrzeszająca osoby poszukujące pomocy oraz osoby gotowe takiej pomocy udzielić.
                        Strona ma na celu umożliwienie pomocy drugiemu człowiekowi, bliżniemu w celu ułatwiena sobie życia.
                        Jesteś osobą która ma trudności z chodzeniem, a może po prostu się obecenie rozchorowałeś?
                        Jako senior masz możliwość stworzenia prośby o pomoc, w tym celu zaloguj się do swojego konta, jeśli takiego jeszcze nie posiadasz, niezbęde będzie utworzenie własnego konta.
                        Po zalogowaniu przejdź do zakładki nowe zgłoszenie i dodaj swoją prośbe, dokładnie opisz czego oczekujesz.
                        Jesteś osobą szukającą możliwości aby pomóc bliźniemu? Nic trudnego, przejdź do swojego profilu, poprzez zalogowanie się na stronie, jeśli nie masz konta
                        utwórz nowe i zajrzyj do zakładki aktualne zgłoszenia. Dziękujemy, że chcecie pomagać. Liczymy, że razem będzie nam łatwiej.
                    </h2></em></p></div>
                    <img src="https://wsb-seniorcare-app.s3.eu-west-1.amazonaws.com/close.png" class="rounded">
                </div>
            </div>
        </section>


        <footer class="footer text-center bg-secondary pt-5 pb-5" id="contact">
            <div class="container">
                <div class="row">
                  <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h3 class="text-uppercase mb-4"><i class="bi bi-geo" style="font-size: 2rem; color: darkgray;"></i>  Location</h3>
                        <p class="lead mb-0">
                            ul. Powstańców Wielkopolskich 5
                            <br />
                            61-895 Poznań
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h3 class="text-uppercase mb-4"><i class="bi bi-globe2" style="font-size: 2rem; color: darkgray;"></i>  Around the Web</h3>
                        <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                        <a href="https://mobile.twitter.com/i/flow/login" class="fa fa-twitter"></a>
                        <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                        <a href="https://accounts.google.com/signin/v2/identifier?service=youtube&uilel=3&passive=true&continue=https%3A%2F%2Fwww.youtube.com%2Fsignin%3Faction_handle_signin%3Dtrue%26app%3Ddesktop%26hl%3Den-GB%26next%3Dhttps%253A%252F%252Fwww.youtube.com%252Findex&hl=en-GB&ec=65620&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-youtube"></a>

                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h3 class="text-uppercase mb-4"><i class="bi bi-headset" style="font-size: 2rem; color: darkgray;"></i>  Contact</h3>
                        <p class="mb-0">
                            Email: support@teamseniorcare.com<br>
                            <h5>We are happy to help!</h5>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright py-4 text-center text-dark">
            <div class="container"><small>Copyright &copy; SeniorCare 2021</small></div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>

    </body>
</html>
