@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">{{ Request::is('/') ? 'Dashboard' : 'Not Found' }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Isolat</h5>

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
