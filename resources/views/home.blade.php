
@extends('layouts.app')

@section('title', 'Home - SnackHouse')

@section('content')

<div class="p-4 p-md-5 mb-5 rounded-4 text-white"
     style="background: linear-gradient(120deg, #302016, #80552e);">

    <div class="row align-items-center g-4 py-3">
        <div class="col-lg-7">
            <span class="badge bg-warning text-dark mb-3">
                WELCOME TO SNACKHOUSE
            </span>

            <h1 class="display-5 fw-bold">
                Camilan Renyah,<br>
                Teman Setiap Cerita.
            </h1>

            <p class="lead mt-3">
                Nikmati beragam makanan kering dengan rasa lezat,
                kualitas pilihan, dan harga bersahabat.
            </p>

            <a href="{{ route('snacks.index') }}"
               class="btn btn-warning btn-lg mt-3">
                Jelajahi Katalog
            </a>
        </div>

        <div class="col-lg-5 text-center">
            <img
                src="{{ asset('assets/images/keripik-pisang.jpg') }}"
                alt="Keripik Pisang"
                class="img-fluid rounded-4 shadow"
                style="max-height: 300px; object-fit: cover;"
            >
        </div>
    </div>
</div>

<div class="text-center mb-5">
    <h2 class="fw-bold">Kenapa SnackHouse?</h2>
    <p class="text-muted">
        Camilan sederhana untuk menemani berbagai suasana.
    </p>
</div>

<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4">
            <div class="fs-1">😋</div>
            <h5 class="fw-bold mt-2">Rasa Beragam</h5>
            <p class="text-muted mb-0">
                Berbagai pilihan rasa untuk menemani waktu santai.
            </p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4">
            <div class="fs-1">✨</div>
            <h5 class="fw-bold mt-2">Camilan Renyah</h5>
            <p class="text-muted mb-0">
                Pilihan makanan kering yang cocok untuk dinikmati kapan saja.
            </p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center p-4">
            <div class="fs-1">💰</div>
            <h5 class="fw-bold mt-2">Harga Bersahabat</h5>
            <p class="text-muted mb-0">
                Pilihan camilan dengan harga yang ramah di kantong.
            </p>
        </div>
    </div>
</div>

<div class="text-center bg-white shadow-sm rounded-4 p-4 p-md-5">
    <h2 class="fw-bold">Sudah Siap Memilih Camilan?</h2>
    <p class="text-muted">
        Lihat berbagai produk makanan kering yang tersedia di katalog kami.
    </p>

    <a href="{{ route('snacks.index') }}"
       class="btn btn-dark px-4">
        Lihat Semua Produk
    </a>
</div>

@endsection
