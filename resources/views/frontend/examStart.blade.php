@extends('frontend.master')

@section('content')
    <!-- Cover section -->
    <div class=" examListCover d-flex justify-content-center">
        <section class="content d-flex align-items-center" style="height: 400px;">
            <h1>Exam List of {{ $subject->name }}</h1>

            <!-- Some content to demonstrate viewport scrolling behavior -->
        </section>
    </div>

    {{-- main content --}}
    <div class="">
        <section class="container my-5">
            <div class="row g-4 mt-5">
                <div class="col mt-5">
                    <div class="card h-100 border bg-body-secondary rounded-0">
                        <div class="card-body d-flex align-items-center justify-content-center p-0">
                            <h5 class="card-title m-0 text-center ">Exam List of {{ $subject->name }}</h5>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row row-cols-1 row-cols-md-4 g-4"> --}}
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sel No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($subject->exams as $key => $exam)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $exam->name ?? '' }}</td>
                            <td>{{ $exam->is_active == 0 ? 'Inactive' : 'Active' }}</td>

                            <td class="d-flex">
                                <a href="{{ route('question.paper', $exam->id) }}"
                                    class="btn btn-primary btn-sm mx-1 font-size-lg rounded-0 "><i
                                        class="bi bi-pencil-square"></i>START</a>
                            </td>
                        </tr>
                    @empty
                        <td colspan="4" class="text-center fw-bold text-danger">No Exam Found</td>
                    @endforelse
                </tbody>
            </table>
            {{-- </div> --}}
        </section>
    </div>
@endsection
