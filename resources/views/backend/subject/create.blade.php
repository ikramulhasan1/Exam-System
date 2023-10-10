@extends('backend.master')

@section('content')
    <div class="container  my-5">
        <div class="container" id="subBody">
            <div id="successMessage" style="display: none" class="alert alert-success mt-3">
                Data stored successfully!
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4 class="card-title">Subject Details</h4>
                    <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subject</a>
                </div>
                <div class="card-body">


                    <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data"
                        id="myForm">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter the subject">

                        </div>
                        {{-- <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Level</label>

                            <select class="form-select p-2 border ">
                                <option selected>select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>

                        </div> --}}
                        {{-- <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Question</label>

                            <input type="text" name="question" class="form-control" placeholder="Enter your question">

                        </div>  --}}
                        {{-- <div class="mb-3 row">
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
                        </div> --}}

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
                <h4 class="card-title">Subject Details</h4>
                <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subject</a>
            </div>
            <div class="card-body">


                <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter the subject">

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
                    url: '{{ route('subjects.store') }}',
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
