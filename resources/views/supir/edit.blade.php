@extends('layout.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Edit Data</h2>
            </div>
        </div>
    </div>
    <a href='{{ url('supir') }}' class="btn btn-secondary"><< Kembali </a>
    <form action="{{ url('supir/'.$supir->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="my-5 p-5 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $supir->nama }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sim" class="col-sm-2 col-form-label">SIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sim" name="sim" value="{{ $supir->sim }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
