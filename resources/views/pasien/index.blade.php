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
                        <h1>Daftar Data Pasien</h1>
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

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pasien</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pasien as $pasien)
                                <tr>
                                    <td>{{ $pasien->id }}</td>
                                    <td>{{ $pasien->kode }}</td>
                                    <td>{{ $pasien->nama }}</td>
                                    <td>{{ $pasien->tmp_lahir }}</td>
                                    <td>{{ $pasien->tgl_lahir }}</td>
                                    <td>{{ $pasien->gender }}</td>
                                    <td>{{ $pasien->email }}</td>
                                    <td>{{ $pasien->alamat }}</td>
                                    <td>
                                        <a class="btn btn-info" href="view_pasien.php?id=<?= $pasien['id'] ?>">View</a>
                                        <a class="btn btn-success"
                                            href="form_pasien.php?idedit=<?= $pasien['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="delete_pasien.php?iddel=<?= $pasien['id'] ?>"
                                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $pasien['nama'] ?>?')) {return false}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Pasien
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
