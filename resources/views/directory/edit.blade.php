@extends('layouts.main')

@section('container')
    <div class="pagetitle">
        <h1>Directory</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">{{ Request::is('directory*') ? 'Directory' : 'Not Found' }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Data</h5>
            <!-- General Form Elements -->
            <form action="/directory/{{ $directory->id }}" method="post">
                @method('put')
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Mitra</label>
                    <div class="col-sm-10">
                        <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror"
                            required autofocus value="{{ old('mitra') ? old('mitra') : $directory->mitra }}">
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
                            class="form-control @error('kode_isolat') is-invalid @enderror"
                            value="{{ old('kode_isolat') ? old('kode_isolat') : $directory->kode_isolat }}">
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
                        <input type="text" name="rak" class="form-control @error('rak') is-invalid @enderror"
                            value="{{ old('rak') ? old('rak') : $directory->rak }}">
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
                            value="{{ old('jenis') ? old('jenis') : $directory->jenis }}">
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
                            value="{{ old('tahun') ? old('tahun') : $directory->tahun }}">
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
                            class="form-control @error('keterangan') is-invalid @enderror"
                            value="{{ old('keterangan') ? old('keterangan') : $directory->keterangan }}">
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
