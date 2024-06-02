@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Periksa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Periksa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Periksa</h3>
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
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="berat">Berat</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control" id="berat" name="berat" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tinggi">Tinggi</label>
                                </div>
                                <div class="col-9">
                                    <input type="number" class="form-control" id="tinggi" name="tinggi" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="tensi">Tensi</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="tensi" name="tensi" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="keterangan">Keterangan</label>
                                </div>
                                <div class="col-9">
                                    <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="pasien_id">Pasien</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" id="pasien_id" name="pasien_id" required>
                                        <option selected disabled>pilih pasien</option>
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
                                    <label for="paramedik_id">Paramedik</label>
                                </div>
                                <div class="col-9">
                                    <select class="form-control" id="paramedik_id" name="paramedik_id" required>
                                        <option selected disabled>pilih dokter</option>
                                        @foreach ($list_paramedik as $paramedik)
                                            <option value="{{ $paramedik->id }}">{{ $paramedik->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-secondary" href="{{ route('periksa.index') }}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
