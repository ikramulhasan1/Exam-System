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
                <div class="card-title">Subjects</div>
                <a href="{{ route('subjects.create') }}" class="btn btn-primary">Subject setup</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Image</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $key => $subject)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $subject->name ?? '' }}</td>
                                <td>{{ $subject->image ?? '' }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('subjects.edit', $subject->id) }}"
                                        class="btn btn-primary btn-sm mx-1 font-size-lg "><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm font-size-lg  "><i
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
