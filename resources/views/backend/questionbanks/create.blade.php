@extends('backend.master')

@section('content')
    <div class="container  my-5">
        <div class="container" id="subBody">
            <div id="successMessage" style="display: none" class="alert alert-success mt-3">
                Data stored successfully!
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4 class="card-title">Question Add</h4>
                    <a href="{{ route('questionbanks.index') }}" class="btn btn-primary">Question Bank</a>
                </div>
                <div class="card-body">


                    <form action="{{ route('questionbanks.store') }}" method="POST" enctype="multipart/form-data"
                        id="myForm">
                        @csrf

                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Subjects</label>
                            <select class="form-select p-2 border" name="subject_id">
                                <option selected>--Select Subject--</option>
                                @forelse ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name ?? '' }}</option>
                                @empty
                                    <option>No Subject in Available </option>
                                @endforelse
                            </select>
                        </div>

                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Level</label>
                            <select class="form-select p-2 border" name="level_id">
                                <option selected>--Select Level--</option>
                                @isset($levels)
                                    @forelse ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->name ?? '' }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter the title">

                        </div>

                        <div class="mb-3 row">
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option1" class="form-control" placeholder="Option-1">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option2" class="form-control" placeholder="Option-2">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option3" class="form-control" placeholder="Option-3">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option4" class="form-control" placeholder="Option-4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="correct_answer" class="form-control" placeholder="Correct Answer">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
        <button type="button" class="btn btn-warning my-2" id="newSubAdd">Sub Add</button>
    </div>


    <script>
        // Create subject/subject crud 

        document.getElementById("newSubAdd").addEventListener("click", function() {
            const parents = document.getElementById("subBody");

            const newSub = document.createElement("div")
            newSub.classList.add("mt-3")
            newSub.innerHTML = `
            <div id="successMessage" style="display: none" class="alert alert-success mt-3">
                Data stored successfully!
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4 class="card-title">Question Add</h4>
                    <a href="{{ route('questionbanks.index') }}" class="btn btn-primary">Question Bank</a>
                </div>
                <div class="card-body">


                    <form action="{{ route('questionbanks.store') }}" method="POST" enctype="multipart/form-data"
                        id="myForm">
                        @csrf

                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Subjects</label>
                            <select class="form-select p-2 border" name="subject_id">
                                <option selected>--Select Subject--</option>
                                @forelse ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name ?? '' }}</option>
                                @empty
                                    <option>No Subject in Available </option>
                                @endforelse
                            </select>
                        </div>

                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Level</label>
                            <select class="form-select p-2 border" name="level_id">
                                <option selected>--Select Level--</option>
                                @isset($levels)
                                    @forelse ($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->name ?? '' }}</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter the title">

                        </div>

                        <div class="mb-3 row">
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option1" class="form-control" placeholder="Option-1">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option2" class="form-control" placeholder="Option-2">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option3" class="form-control" placeholder="Option-3">
                            </div>
                            <div class="d-flex col-lg-6 mb-3">
                                <input type="text" name="option4" class="form-control" placeholder="Option-4">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="number" name="correct_answer" class="form-control" placeholder="Correct Answer">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        
        `;

            parents.appendChild(newSub)

        })
    </script>


    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this);

                $.ajax({
                    url: '{{ route('questionbanks.store') }}',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Display the success message
                        $('#successMessage').show();

                        // Optional: Scroll to the success message
                        $('html, body').animate({
                            scrollTop: $('#successMessage').offset().top
                        }, 1000);

                        // Optional: Hide the success message after 5 seconds
                        setTimeout(function() {
                            $('#successMessage').hide();
                        }, 5000);


                        // Handle the response (e.g., redirect to another page)
                        // window.location.href = '{{ route('subjects.index') }}';
                    },
                    error: function(xhr, textStatus, error) {
                        console.log(xhr.statusText);
                        console.log(textStatus);
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endsection
