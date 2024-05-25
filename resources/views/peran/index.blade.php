@extends('layout.dashboard')

@section('content')
<div class="row column_title">
    <div class="col-md-12">
        <div class="page_title">
            <h2>Data Peran</h2>
        </div>
    </div>
</div>
<!-- START DATA -->
<div class="my-3 p-3 bg-body rounded shadow-sm">
    @include('komponen.pesan')
    <div class="pb-3">
        <a href='{{ url('peran/create') }}' class="btn btn-primary fa fa-plus-circle"> Tambah Data</a>
        <a href='{{ url('peran/view/pdf') }}' class="btn btn-danger fa fa-download ml-5">Download PDF</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perans as $peran)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $peran->status }}</td>
                <td>
                    <a href="{{ url('peran/' . $peran->status . '/edit') }}" class="btn btn-warning btn-sm fa fa-edit"> Edit</a>
                    <form action="{{ url('peran/' . $peran->status) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm fa fa-trash-o"> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
