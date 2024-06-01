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
                        <h1>Daftar Data Paramedik</h1>
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
                    <h3 class="card-title">Daftar Paramedik</h3>

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
                    <a class="btn btn-primary mb-3" href="{{ route('paramedik.create') }}">Tambah Data</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Kategori</th>
                                <th>Telpon</th>
                                <th>Alamat</th>
                                <th>Unit Kerja ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_paramedik as $paramedik)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $paramedik->nama }}</td>
                                    <td>{{ $paramedik->gender }}</td>
                                    <td>{{ $paramedik->tmp_lahir }}</td>
                                    <td>{{ $paramedik->tgl_lahir }}</td>
                                    <td>{{ $paramedik->kategori }}</td>
                                    <td>{{ $paramedik->telpon }}</td>
                                    <td>{{ $paramedik->alamat }}</td>
                                    <td>{{ $paramedik->unit_kerja_id }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('paramedik.show', $paramedik->id) }}"
                                            class="btn btn-info mr-2"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('paramedik.edit', $paramedik->id) }}"
                                            class="btn btn-success mr-2"><i class="bi bi-pencil-square"></i></a>

                                        <form action="{{ route('paramedik.destroy', $paramedik->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" name="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash3"></i></a></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
