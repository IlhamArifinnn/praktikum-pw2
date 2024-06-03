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
                        <h1>Tambah Data Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('periksa.index') }}">Periksa</a></li>
                            <li class="breadcrumb-item active">Tambah Periksa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Periksa</h3>

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
                    <form action="{{ route('periksa.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tanggal">Tanggal</label>
                                </div>
                                <div class="col-9">
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" required>
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
                                        placeholder="Masukkan berat badan" required>
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
                                        placeholder="Masukkan tinggi badan" required>
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
                                        placeholder="Masukkan tensi darah" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="keterangan">Keterangan</label>
                                </div>
                                <div class="col-9">
                                    <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan keterangan" required></textarea>
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
                                        <option value="">Pilih pasien</option>
                                        @foreach ($list_pasien as $pasien)
                                            <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
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
                                        <option value="">Pilih dokter</option>
                                        @foreach ($list_dokter as $dokter)
                                            <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
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
                    Tambah Periksa
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
