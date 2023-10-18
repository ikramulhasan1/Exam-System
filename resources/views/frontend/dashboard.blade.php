@extends('frontend.master')

@section('content')
    <!-- Cover section -->
    <section class="grad mt-lg-5" id="cover">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-start justify-content-center flex-column">
                    <span class="">
                        <h1 class="m-0 heading">Learn & Upgrade</h1>
                        <h1 class="m-0 heading">Your Skills on Your</h1>
                        <h1 class="m-0 heading">Schedule</h1>
                    </span>
                    <p class="my-4 pText">Anywhere, anytime. Everything You Need For Your Exam Preparation</p>
                    <div class="mt-12 flex flex-wrap">
                        <div class=" mt-4 sm:mt-0 md:mt-4 lg:mt-0">
                            <a href="#" class="btn">
                                Get Started
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 align-items-center">
                    <img class="img-fluid" src="{{ asset('ui/frontend') }}/assets/img/cover.png" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURES section -->
    <section class="container sectionMargin" id="features">
        <div class="text-center mb-4">
            <p class="feature">FEATURES</p>
            <h1 class="heading">Better Learning. Better Results.</h1>
            <p class="subheading">One platform for all your learning needs</p>
        </div>

        <div class="">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-start p-2">
                    <div class="me-3">
                        <span class="m">
                            <i class="fa-regular fa-user featuresIcon"></i>
                        </span>

                    </div>
                    <div class="">
                        <h4 class="smallheading">User Authentication and Profiles:</h4>
                        <p class="fss">Secure user authentication and personalized profiles for learners,
                            educators, and administrators.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-start p-2">
                    <div class="me-3">
                        <span class="m">
                            <i class="fa-regular fa-file-lines featuresIcon"></i>
                        </span>
                    </div>
                    <div class="">
                        <h4 class="smallheading">Online Exams and Assessments:</h4>
                        <p class="fss">Conduct secure online exams, quizzes, and assessments with various
                            question
                            formats (multiple-choice, short answer,
                            essays) and customizable grading parameters.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-start p-2">
                    <div class="me-3">
                        <span class="m">
                            <i class="fa-solid fa-laptop-file featuresIcon"></i>
                        </span>
                    </div>
                    <div class="">
                        <h4 class="smallheading">Remote Proctoring and Anti-Cheating Measures:</h4>
                        <p class="fss">Implement features like remote proctoring, webcam monitoring, and
                            plagiarism detection to ensure exam integrity.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-start p-2">
                    <div class="me-3">
                        <span class="m">

                            <i class="fa-solid fa-graduation-cap featuresIcon"></i>
                        </span>
                    </div>
                    <div class="">
                        <h4 class="smallheading">Automated Grading and Feedback:</h4>
                        <p class="fss">Automatically grade exams and provide instant feedback to learners,
                            saving
                            time for educators and enhancing the
                            learning process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Exam section -->
    <section class="container sectionMargin" id="explore">
        <div class="text-center mb-4">
            <p class="feature">EXAMS</p>
            <h1 class="heading">Seamless and Secure Online Exam Experience</h1>
            <p class="subheading m-0">Secure, Flexible, and Efficient Exam Management for Better Results</p>

        </div>

        <div class="">
            <div class="row d-sm-flex justify-content-center">
                <div class="row row-cols-2 row-cols-md-4 g-4">
                    <div class="col-lg-3">
                        <div class="card h-100">

                            <div class="card-body text-center">
                                <h5 class="card-title">Exam Name</h5>

                                <div class="d-grid gap-2 col-9 mx-auto mt-4">
                                    <a href="/examList.html" class="exploreBtn ">Explore <i
                                            class="fa-regular fa-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100">

                            <div class="card-body text-center">
                                <h5 class="card-title">Exam Name</h5>

                                <div class="d-grid gap-2 col-9 mx-auto mt-4">
                                    <a href="/examList.html" class="exploreBtn ">Explore <i
                                            class="fa-regular fa-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100">

                            <div class="card-body text-center">
                                <h5 class="card-title">Exam Name</h5>

                                <div class="d-grid gap-2 col-9 mx-auto mt-4">
                                    <a href="/examList.html" class="exploreBtn ">Explore <i
                                            class="fa-regular fa-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card h-100">

                            <div class="card-body text-center">
                                <h5 class="card-title">Exam Name</h5>

                                <div class="d-grid gap-2 col-9 mx-auto mt-4">
                                    <a href="/examList.html" class="exploreBtn ">Explore <i
                                            class="fa-regular fa-circle-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS section -->
    <section class="container sectionMargin">
        <div class="text-center mb-4">
            <p class="feature">TESTIMONIALS</p>
            <h1 class="heading">Our students and parents love us</h1>
            <p class="subheading m-0">Hear it directly from our students</p>

        </div>

        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="card px-5 py-4 border-0 shadow-sm">
                        <span><i class="fa-solid fa-quote-left fs-2 navyBlueColor"></i></span>
                        <p class="text-start testimonialText">QuickTest made online exams a breeze. The security
                            measures and intuitive interface provided a seamless experience for
                            both educators and students. Highly recommended for efficient and reliable exam
                            management!</p>
                        <p class="text-start testimonialAuthor">- John Doe</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card px-5 py-4 border-0 shadow-sm">
                        <span><i class="fa-solid fa-quote-left fs-2 navyBlueColor"></i></span>
                        <p class="text-start testimonialText">QuickTest exceeded our expectations. The randomized
                            question bank and real-time tracking added a layer of fairness to
                            our exams. The system's adaptability and ease of use have positively impacted our
                            assessment strategies.</p>
                        <p class="text-start testimonialAuthor">- Michael Johnson</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
