@extends('layout.dashboard')
@section('content')

<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Data Supir</h2>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        @include('komponen.pesan')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('supir/create') }}' class="btn btn-primary fa fa-plus-circle"> Tambah Data</a>
            <a href='{{ url('supir/view/pdf') }}' class="btn btn-danger fa fa-download ml-5">Download PDF</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">SIM</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supir as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->sim }}</td>
                    <td>
                        <a href="{{ url('supir/' . $item->id . '/edit') }}" class="btn btn-warning btn-sm fa fa-edit"> Edit</a>
                        <form class='d-inline' action="{{ url('supir/'.$item->id) }}" method="post">
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
</div>
@endsection
