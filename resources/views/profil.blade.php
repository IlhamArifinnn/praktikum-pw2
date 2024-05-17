@php
    $username = 'Ilham Arifin';
    $role = 'Mahasiswa';
@endphp

@if ($role == 'Mahasiswa')
        <h3>Selamat datang {{ $username }} Anda adalah seorang {{ $role }}</h3>
@else
        <p>Selamat datang {{ $username }} Anda adalah seorang User</p>
@endif