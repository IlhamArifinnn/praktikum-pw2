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
                        <h1>Detail Data Kelurahan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelurahan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Kelurahan</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered w-50">
                        <tr>
                            <th>Nama Kelurahan</th>
                            <td>{{ $kelurahan->nama }}</td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td>{{ $kelurahan->nama }}</td>
                        </tr>
                    </table>

                    <a class="btn btn-secondary mt-3" href="{{ route('kelurahan.index') }}">Kembali</a>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Detail Kelurahan
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
