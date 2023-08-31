@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Add New Rak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/directory">Directory</a></li>
                <li class="breadcrumb-item"><a href="/directory/create">Add New Data</a></li>
                <li class="breadcrumb-item active">{{ Request::is('directory*') ? 'Add New Rak' : 'Not Found' }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <h5 class="fw-semibold mb-4">Add New Rak</h5>
            <!-- General Form Elements -->
            <form action="/directory/create/create-rak" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Rak</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" id="name" oninput="rakSlug()"
                            class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="off"
                            value="{{ old('name') }}">
                        <input type="hidden" name="slug" id="slug">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Create Rak</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>

    <script>
        function rakSlug() {
            let text = document.getElementById("name").value;
            document.getElementById("slug").value = text.toLowerCase();
        }
    </script>
@endsection
