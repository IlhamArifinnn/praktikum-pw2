@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Paramedik</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('paramedik.index') }}">Paramedik</a></li>
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Paramedik</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('paramedik.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        id="gender_laki" value="L">
                                    <label class="form-check-label" for="gender_laki"
                                        {{ old('gender') == 'L' ? 'selected' : '' }}>Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        id="gender_perempuan" value="P">
                                    <label class="form-check-label" for="gender_perempuan"
                                        {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="tmp_lahir">Tempat Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                                    value="{{ old('tmp_lahir') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                    value="{{ old('tgl_lahir') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="kategori">Kategori</label>
                            </div>
                            <div class="col-9">
                                <select id="kategori" name="kategori" class="custom-select">
                                    <option selected disabled>pilih unit kerja</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Perawat">Perawat</option>
                                    <option value="Bidan">Bidan</option>
                                    <option value="Apoteker">Apoteker</option>
                                    <option value="Ahli Gizi">Ahli Gizi</option>
                                    <option value="Teknisi Laboratorium">Teknisi Laboratorium</option>
                                    <option value="Radiografer">Radiografer</option>
                                    <option value="Farmasis">Farmasis</option>
                                    <option value="Fisioterapis">Fisioterapis</option>
                                </select>
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-2">
                                    <label for="telpon">Telpon</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="telpon" name="telpon"
                                        value="{{ old('telpon') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-2">
                                    <label for="alamat">Alamat</label>
                                </div>
                                <div class="col-9">
                                    <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="unit_kerja_id" class="col-2 col-form-label">Pilih unit kerja</label>
                                <div class="col-9">
                                    <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
                                        <option selected disabled>pilih unit kerja</option>
                                        @forelse ($list_unit_kerja as $unit_kerja)
                                            <option value="{{ $unit_kerja->id }}">{{ $unit_kerja->nama }}</option>
                                        @empty
                                            <option selected disabled>no data!</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-2 col-8">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('paramedik.index') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="card-footer">
                    Tambah Data Paramedik
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
