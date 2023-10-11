@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="" id="subBody">
            <div id="successMessage" style="display: none" class="alert alert-success mt-3">
                Data stored successfully!
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h4 class="card-title m-0">Subject Details</h4>
                        <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subject</a>
                    </div>
                </div>
            </div>

            <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
                @csrf
                <div id="subBody">
                    <div class="card" id="subBody">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter the subject">

                            </div>

                            <div class="form-group row d-flex flex-column">
                                <label class="col-form-label col-lg-2">Image</label>
                                <div class="col">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>




            </form>


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
            <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data" id="myForm">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter the subject">

                        </div>

                        <div class="form-group row d-flex flex-column">
                            <label class="col-form-label col-lg-2">Image</label>
                            <div class="col">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
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
