<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EXAM System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <style>
        .cover-image {
            /* Background image */
            background-image: url('{{ asset('ui/frontend/assets/image/Exam-Cover.jpg') }}');
            background-size: cover;
            background-repeat: no-repeat;

            opacity: 0.7;

            height: 500px;
            width: 100%;

        }

        /* .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        } */
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">EXAM System</a>


                <div class="d-flex gap-3">

                    <div class="dropdown">
                        <button type="button" class="btn btn-dark rounded-0 dropdown-toggle" data-bs-toggle="dropdown">
                            Account
                        </button>
                        <ul class="dropdown-menu rounded-0 ">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">EXAM System</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" aria-current="page"
                                    href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-dark" href="#">About</a>
                            </li>
                            <li class="nav-item dropdown  text-black">
                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main style="margin: 0px 0px 250px 0px">

        {{-- Cover image section --}}
        {{-- <section>
            <div class="cover-image mb-5"></div>
        </section> --}}

        <section class="container my-5">
            <div class="row g-4 mt-5">
                <div class="col mt-5">
                    <div class="card h-100 border bg-body-secondary rounded-0">
                        <div class="card-body">
                            <h5 class="card-title m-0 text-center ">Exam</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row row-cols-1 row-cols-md-4 g-4"> --}}

            <div class="row g-4">
                <div class="col">
                    <div class="card h-100 border rounded-0">
                        <div class="card-body pt-1">

                            {{-- form --}}
                            <form action="{{ route('submitted_question_paper') }}" method="post">
                                @csrf

                                <input type="hidden" value="{{ $exam->id }}" name="exam_id">

                                <div class="row d-flex flex-column mb-4 py-2 bg-warning-subtle">
                                    <div class="col">
                                        <h6 class="my-1">SUBJECT : {{ $exam->subject->name }}</h6>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <h6 class="my-1">Time :</h6>
                                        <h6 class="my-1 mx-1 text-danger" id="timer"></h6>
                                    </div>
                                </div>



                                {{-- @dd($question) --}}
                                <div class="">
                                    @forelse ($questions as $key => $question)
                                        <h6 class="card-title mx-0">{{ $key + 1 }}. {{ $question->title }}</h6>
                                        <div class="row">

                                            <div class="col-3 mx-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->question_id }}" value="1"
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        {{ $question->option1 }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->question_id }}" value="2"
                                                        id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        {{ $question->option2 }}
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-3 mx-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->question_id }}" value="3"
                                                        id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        {{ $question->option3 }}
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->question_id }}" value="4"
                                                        id="flexRadioDefault4">
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        {{ $question->option4 }}
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    @empty
                                        <label class="form-check-label">
                                            No Question
                                        </label>
                                    @endforelse
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm my-4 rounded-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            {{-- </div> --}}
        </section>
    </main>
    <footer class="bg-dark text-center text-white footer">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <script>
        // Function to update the timer display
        function updateTimer(hours, minutes, seconds) {
            const timerDisplay = document.getElementById('timer');
            timerDisplay.innerText =
                `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        }

        // Function to start the timer
        function startTimer(duration) {
            let timer = duration;
            const interval = 1000; // Update every second

            const timerInterval = setInterval(function() {
                const hours = Math.floor(timer / 3600);
                const minutes = Math.floor((timer % 3600) / 60);
                const seconds = timer % 60;

                updateTimer(hours, minutes, seconds);

                if (--timer < 0) {
                    clearInterval(timerInterval);
                    alert('Time is up!');
                }
            }, interval);
        }

        // Set the exam duration in seconds (1 hour and 10 minutes = 70 minutes * 60 seconds)
        const examDuration = {{ $examTime }};

        // Start the timer when the page loads
        window.onload = function() {
            startTimer(examDuration);
        };
    </script>
</body>

</html>
