@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Data Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('periksa.index') }}">Periksa</a></li>
                            <li class="breadcrumb-item active">Update Periksa</li>
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
                    <h3 class="card-title">Update Periksa</h3>

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
                    <form action="{{ route('periksa.update', $periksa->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tanggal">Tanggal</label>
                                </div>
                                <div class="col-9">
                                    <input type="date" name="tanggal" class="form-control" id="tanggal"
                                        value="{{ $periksa->tanggal }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="berat">Berat</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" name="berat" class="form-control" id="berat"
                                        value="{{ $periksa->berat }}" placeholder="Masukkan berat badan" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tinggi">Tinggi</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" name="tinggi" class="form-control" id="tinggi"
                                        value="{{ $periksa->tinggi }}" placeholder="Masukkan tinggi badan" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tensi">Tensi</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" name="tensi" class="form-control" id="tensi"
                                        value="{{ $periksa->tensi }}" placeholder="Masukkan tensi darah" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="keterangan">Keterangan</label>
                                </div>
                                <div class="col-9">
                                    <textarea name="keterangan" class="form-control" id="keterangan" required>{{ $periksa->keterangan }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="pasien_id">Pasien</label>
                                </div>
                                <div class="col-9">
                                    <select name="pasien_id" class="form-control" id="pasien_id" required>
                                        @foreach ($list_pasien as $pasien)
                                            <option value="{{ $pasien->id }}"
                                                @if ($periksa->pasien_id == $pasien->id) selected @endif>{{ $pasien->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="dokter_id">Dokter</label>
                                </div>
                                <div class="col-9">
                                    <select name="dokter_id" class="form-control" id="dokter_id" required>
                                        @foreach ($list_paramedik as $dokter)
                                            <option value="{{ $dokter->id }}"
                                                @if ($periksa->dokter_id == $dokter->id) selected @endif>{{ $dokter->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('periksa.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Update Periksa
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
