@extends('backend.dashboard')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h3>Table Lowongan</h3>
                        {{-- <a href="" class="btn btn-secondary">ADD</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>No</th>
                                        <th class="w-25">Nama</th>
                                        <th class="w-75">Tanggal Lahir</th>
                                        <th>Tempat Lahir</th>
                                        <th>Umur</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Nomor NPWP</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Asal Sekolah</th>
                                        <th>Tahun Lulusan</th>
                                        <th>Status Nikah</th>
                                        <th>Agama</th>
                                        <th>Pengalaman Kerja (Nama Perusahaan)</th>
                                        <th>Pengalaman Kerja (Jabatan)</th>
                                        <th>No Whatsapp</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>CV</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="21" class="text-center">
                                            <h4>data Belum Tersedia</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
