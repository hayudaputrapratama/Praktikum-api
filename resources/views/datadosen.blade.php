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
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Homebase</th>
                        <th>Pendidikan</th>
                        <th>Mata Kuliah Keahlian</th>
                        <th>Jabatan Fungsional</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1004059702</td>
                        <td>Ir. HIDAYATI RUSNEDY S.T, M.Kom</td>
                        <td>Wanita</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <td>Decision Support System, Data MIning</td>
                        <td>Asisten Ahli (150.00) / Instructor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

            <tbody>
                    <tr>
                        <td>1</td>
                        <td>1004059702</td>
                        <td>Ir. HIDAYATI RUSNEDY S.T, M.Kom</td>
                        <td>Wanita</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <th>Decision Support System, Data MIning</th>
                        <td>Asisten Ahli (150.00) / Instructor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

            <tbody>
                    <tr>
                        <td>1</td>
                        <td>1004059702</td>
                        <td>Ir. HIDAYATI RUSNEDY S.T, M.Kom</td>
                        <td>Wanita</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <th>Decision Support System, Data MIning</th>
                        <td>Asisten Ahli (150.00) / Instructor</td>
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