@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Program Studi</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Halaman ini digunakan untuk mengelola data program studi.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Jenjang Prodi</th>
                        <th>Jumlah Mahasiswa</th>
                        <th>Jumlah Dosen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Teknik Elektronika</td>
                        <td>Fakultas Teknik</td>
                        <td>Fakultas Teknik</td>
                        <td>Fakultas Teknik</td>
                        <td>Fakultas Teknik</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection