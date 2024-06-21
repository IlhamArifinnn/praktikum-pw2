@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail Periksa</h1>
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
                    <h3 class="card-title">Detail Periksa</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped    ">
                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $periksa->tanggal }}</td>
                        </tr>
                        <tr>
                            <th>Berat</th>
                            <td>{{ $periksa->berat }}</td>
                        </tr>
                        <tr>
                            <th>Tinggi</th>
                            <td>{{ $periksa->tinggi }}</td>
                        </tr>
                        <tr>
                            <th>Tensi</th>
                            <td>{{ $periksa->tensi }}</td>
                        </tr>
                        <tr>
                            <th>Keterangan</th>
                            <td>{{ $periksa->keterangan }}</td>
                        </tr>
                        <tr>
                            <th>Pasien</th>
                            <td>{{ $periksa->pasien->nama }}</td>
                        </tr>
                        <tr>
                            <th>Paramedik</th>
                            <td>{{ $periksa->dokter->nama }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-primary mt-3" href="{{ route('periksa.index') }}">Kembali</a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('admin.footer')
