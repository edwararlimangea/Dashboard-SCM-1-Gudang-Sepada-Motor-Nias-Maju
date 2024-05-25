@extends('layout.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Tambahkan Data</h2>
            </div>
        </div>
    </div>
    <a href='{{ url('peran') }}' class="btn btn-secondary"><< Kembali </a>
    <form action="{{ route('peran.store') }}" method="POST">
        @csrf
        <div class="my-5 p-5 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="peran" class="col-sm-2 col-form-label">Peran</label>
                <div class="col-sm-10">
                    <select class="form-control" name="peran" id="peran">
                        <option value="">Pilih Peran</option>
                        <option value="supir">Supir</option>
                        <option value="pegawai">Pegawai</option>
                    </select>
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
