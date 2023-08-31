@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Add New Data</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/directory">Directory Isolat</a></li>
                <li class="breadcrumb-item active">{{ Request::is('directory*') ? 'Add New Data' : 'Not Found' }}</li>
            </ol>
        </nav>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <h5 class="fw-semibold mb-4">Add New Data</h5>
            <!-- General Form Elements -->
            <form action="/directory" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Mitra</label>
                    <div class="col-sm-10">
                        <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror"
                            required autofocus autocomplete="off" value="{{ old('mitra') }}">
                        @error('mitra')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kode Isolat</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_isolat"
                            class="form-control @error('kode_isolat') is-invalid @enderror" value="{{ old('kode_isolat') }}"
                            autocomplete="off">
                        @error('kode_isolat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Letak Isolat</label>
                    <div class="col-sm-10">
                        {{-- <input type="text" name="rak" class="form-control @error('rak') is-invalid @enderror"
                            value="{{ old('rak') }}" autocomplete="off"> --}}
                        <div class="d-flex justify-content-center align-items-center">
                            <select class="form-select me-2" aria-label="Default select example" name="rak_id"
                                id="rak_id">
                                <option disabled selected>Pilih rak yang tersedia</option>
                                @foreach ($raks as $rak)
                                    <option value="{{ $rak->id }}">{{ $rak->name }}</option>
                                @endforeach
                            </select>
                            <a href="/directory/create/create-rak" class="btn btn-success btn-sm"><i
                                    class="bi bi-plus-circle"></i></a>
                        </div>
                        @error('rak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Isolat</label>
                    <div class="col-sm-10">
                        <input type="text" name="jenis" class="form-control @error('jenis') is-invalid @enderror"
                            value="{{ old('jenis') }}" autocomplete="off">
                        @error('jenis')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror"
                            value="{{ old('tahun') }}" autocomplete="off">
                        @error('tahun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="keterangan"
                            class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}"
                            autocomplete="off">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
@endsection
