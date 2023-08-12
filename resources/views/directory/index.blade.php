@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Directory Isolat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">{{ Request::is('directory') ? 'Directory' : 'Not Found' }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="d-flex justify-content-between align-center mb-2">
                <h5 class="fw-semibold">Data Isolat</h5>
                <a href="/directory/create" class="btn btn-primary">Create Data</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mitra</th>
                        <th scope="col">Kode Isolat</th>
                        <th scope="col">Letak Isolat</th>
                        <th scope="col">Jenis Isolat</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($directories->count())
                        @foreach ($directories as $directory)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $directory->mitra }}</td>
                                <td>{{ $directory->kode_isolat }}</td>
                                <td>{{ $directory->rak }}</td>
                                <td>{{ $directory->jenis }}</td>
                                <td>{{ $directory->tahun }}</td>
                                <td>{{ $directory->keterangan }}</td>
                                <td>
                                    <div>
                                        <a href="/directory/{{ $directory->id }}/edit" class="btn btn-sm btn-warning me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="/directory/{{ $directory->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger border-0"
                                                onclick="return confirm('Are you sure ?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <td colspan="8" class="text-center">
                            <p class="text-center fs-4">No data found.</p>
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
