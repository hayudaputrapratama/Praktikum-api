@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Halaman ini digunakan untuk mengelola data mahasiswa.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Fakultas</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hayuda Putra Pratama</td>
                        <td>2255201041</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>hayudaputrapratama@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>2</td>
                        <td>shah wiruddin</td>
                        <td>2255201031</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>shahwiruddin@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>3</td>
                        <td>Arsi dewi saputri</td>
                        <td>2255201002</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>arsidewisaputri@gmail.com</td>
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