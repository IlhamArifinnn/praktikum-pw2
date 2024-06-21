@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Data Pasien</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pasien</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Pasien</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Kode</th>
                            <td>{{ $pasien->kode }}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $pasien->nama }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>{{ $pasien->tmp_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $pasien->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $pasien->gender }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $pasien->email }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $pasien->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Kelurahan</th>
                            <td>{{ $pasien->kelurahan->nama }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('pasien.index') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
