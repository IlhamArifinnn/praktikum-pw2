@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Paramedik</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('paramedik.index') }}">Paramedik</a></li>
                            <li class="breadcrumb-item active">Edit Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Data Paramedik</h3>
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

                    <form action="{{ route('paramedik.update', $paramedik->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
                            <div class="col-2">
                                <label for="nama">Nama</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="nama" name="nama" required
                                    value="{{ old('nama', $paramedik->nama) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="col-9">
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        id="gender_laki" value="L"
                                        {{ old('gender', $paramedik->gender) == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender_laki">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input required class="form-check-input" type="radio" name="gender"
                                        id="gender_perempuan" value="P"
                                        {{ old('gender', $paramedik->gender) == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gender_perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="tmp_lahir">Tempat Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                                    value="{{ old('tmp_lahir', $paramedik->tmp_lahir) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                            </div>
                            <div class="col-9">
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                    value="{{ old('tgl_lahir', $paramedik->tgl_lahir) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="kategori">Kategori</label>
                            </div>
                            <div class="col-9">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option selected disabled>Pilih kategori</option>
                                    @foreach ($list_kategori as $kategori)
                                        <option value="{{ $kategori }}"
                                            {{ old('kategori', $paramedik->kategori) == $kategori ? 'selected' : '' }}>
                                            {{ $kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="telpon">Telpon</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" id="telpon" name="telpon"
                                    value="{{ old('telpon', $paramedik->telpon) }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-2">
                                <label for="alamat">Alamat</label>
                            </div>
                            <div class="col-9">
                                <textarea class="form-control" id="alamat" name="alamat">{{ old('alamat', $paramedik->alamat) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="unit_kerja_id" class="col-2 col-form-label">Unit Kerja</label>
                            <div class="col-9">
                                <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select">
                                    <option selected disabled>Pilih unit kerja</option>
                                    @foreach ($list_unit_kerja as $unit_kerja)
                                        <option value="{{ $unit_kerja->id }}"
                                            {{ old('unit_kerja_id', $paramedik->unit_kerja_id) == $unit_kerja->id ? 'selected' : '' }}>
                                            {{ $unit_kerja->nama }}
                                        </option>
                                    @endforeach
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
                    Edit Data Paramedik
                </div>
            </div>
        </section>
    </div>
</div>

@in
