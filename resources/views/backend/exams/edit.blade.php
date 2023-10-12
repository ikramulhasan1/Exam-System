@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Subjects</div>
                <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subject</a>
            </div>
            <div class="card-body">
                <form action="{{ route('subjects.update', $subject->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">

                        <input type="text" name="name" value="{{ $subject->name }}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class="col-lg-12">

                            <input type="file" name="image" value="{{ $subject->image }}" class="custom-file-input"
                                id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
