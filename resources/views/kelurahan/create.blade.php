@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Kelurahan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kelurahan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Kelurahan</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelurahan.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col-2">
                                    <label for="nama">Nama Kelurahan</label>
                                </div>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="offset-2 col-8">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a class="btn btn-secondary" href="{{ route('kelurahan.index') }}">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
