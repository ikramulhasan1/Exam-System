@extends('backend.master')

@section('content')
    <div class="container my-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Exam</div>

                <div class="d-flex ">
                    <a href="{{ route('exams.create') }}" class="btn btn-primary ">Exam setup</a>
                    <div class="dropdown mx-1">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Export
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">PDF</a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Status</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exams as $key => $exam)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $exam->name ?? '' }}</td>
                                <td>{{ $exam->subject_id ?? '' }}</td>
                                <td>{{ $exam->duration ?? '' }}</td>
                                <td>{{ $exam->is_active == 0 ? 'Inactive' : 'Active' }}</td>


                                <td class="d-flex">
                                    <a href="{{ route('exams.edit', $exam->id) }}"
                                        class="btn btn-primary btn-sm mx-1 font-size-lg "><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('exams.destroy', $exam->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm font-size-lg "><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
