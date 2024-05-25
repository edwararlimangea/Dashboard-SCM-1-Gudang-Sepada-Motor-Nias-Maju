@extends('layout.dashboard')
@section('content')

<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Data Posisi</h2>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        @include('komponen.pesan')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('pengguna/create') }}' class="btn btn-primary fa fa-plus-circle"> Tambah Data</a>
            <a href='{{ url('pengguna/view/pdf') }}' class="btn btn-danger fa fa-download ml-5">Download PDF</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengguna as $item)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->posisi }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->password }}</td>
                    <td>
                        <a href="{{ url('pengguna/' . $item->nama . '/edit') }}" class="btn btn-warning btn-sm fa fa-edit"> Edit</a>
                        <form class='d-inline' action="{{ url('pengguna/'.$item->nama) }}" method="post">
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
