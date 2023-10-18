@extends('frontend.master')

@section('content')
    <!-- Cover section -->
    <div class=" examListCover d-flex justify-content-center">
        <section class="content d-flex align-items-center" style="height: 400px;">
            <h1>Question Paper</h1>


            <!-- Some content to demonstrate viewport scrolling behavior -->

        </section>
    </div>

    <section class="container my-5">


        {{-- <div class="row row-cols-1 row-cols-md-4 g-4"> --}}

        <div class="row g-4">
            <div class="col">
                <div class="card h-100 rounded-0 shadow">
                    <div class="card-body pt-1">

                        {{-- form --}}
                        <form action="{{ route('submitted_question_paper') }}" method="post">
                            @csrf

                            <input type="hidden" value="{{ $exam->id }}" name="exam_id">

                            <div class="row mb-4 py-2" style="background-color: #461E5C; color:white">
                                <div class="d-flex justify-content-between ">
                                    <div class="">
                                        <h5 class="my-1">SUBJECT : {{ $exam->subject->name }}</h5>
                                    </div>
                                    <div class="">
                                        <h5 class="my-1">EXAM : {{ $exam->name }}</h5>
                                    </div>

                                </div>
                                <div class="d-flex  justify-content-between ">

                                    <div class=" d-flex align-items-center">
                                        <h5 class="my-1">Time :</h5>
                                        <h5 class="my-1 mx-1 text-white" id="timer"></h5>
                                    </div>
                                    {{-- <div class="">
                                        <h5 class="my-1">SUBJECT : {{ $exam->subject->name }}</h5>
                                    </div> --}}

                                </div>
                            </div>



                            {{-- @dd($question) --}}
                            <div class="">
                                @forelse ($questions as $key => $question)
                                    <div class="row mb-3 container">
                                        <h6 class="card-title mx-0">{{ $key + 1 }}. {{ $question->title }}</h6>
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
@endsection
