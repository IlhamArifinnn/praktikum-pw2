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
                        <h1>Detail Paramedik</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Paramedik</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Paramedik</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nama</th>
                            <td>{{ $paramedik->nama }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ $paramedik->gender }}</td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td>{{ $paramedik->tmp_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>{{ $paramedik->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td>{{ $paramedik->kategori }}</td>
                        </tr>
                        <tr>
                            <th>Telpon</th>
                            <td>{{ $paramedik->telpon }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $paramedik->alamat }}</td>
                        </tr>
                        <tr>
                            <th>Unit Kerja</th>
                            <td>{{ $paramedik->unit_kerja->nama }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary mt-3" href="{{ route('paramedik.index') }}">Kembali</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Paramedik
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
