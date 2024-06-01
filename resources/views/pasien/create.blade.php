<!-- resources/views/pasien/create.blade.php -->
@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Pasien</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pasien.index') }}">Pasien</a></li>
                            <li class="breadcrumb-item active">Tambah Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Pasien</h3>
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

                    <form action="{{ route('pasien.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="kode">Kode</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="kode" name="kode" required
                                    value="{{ old('kode') }}">
                            </div>
                        </div>

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
                                <label for="tmp_lahir">Tempat Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required
                                    value="{{ old('tmp_lahir') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required
                                    value="{{ old('tgl_lahir') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender" required
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
                                <label for="email">Email</label>
                            </div>
                            <div class="col-9">
                                <input type="email" class="form-control" id="email" name="email" required
                                    value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" id="alamat" required name="alamat">{{ old('alamat') }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="alamat">Kelurahan ID</label>
                            </div>
                            <div class="col-9">
                                <input type="number" class="form-control" id="kelurahan_id" name="kelurahan_id"
                                    required value="{{ old('kelurahan_id') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    Tambah Data Pasien
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
