@extends('layouts.app')

@section('title', $snack->name)

@section('content')

<div class="mb-4">
    <a href="{{ route('snacks.index') }}"
       class="btn btn-outline-dark">
        &larr; Kembali ke Katalog
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="row g-0">

        <div class="col-md-6">
            <img
                src="{{ asset('assets/images/' . $snack->image) }}"
                class="img-fluid rounded-start w-100"
                alt="{{ $snack->name }}"
                style="height: 100%; min-height: 320px; object-fit: cover;"
            >
        </div>

        <div class="col-md-6">
            <div class="card-body p-4 p-lg-5">

                <span class="badge bg-warning text-dark mb-3">
                    Makanan Kering
                </span>

                <h1 class="fw-bold">{{ $snack->name }}</h1>

                <h3 class="text-danger fw-bold my-3">
                    Rp {{ number_format($snack->price, 0, ',', '.') }}
                </h3>

                <hr>

                <p>
                    <strong>Varian Rasa:</strong>
                    {{ $snack->flavor }}
                </p>

                <p>
                    <strong>Berat:</strong>
                    {{ $snack->weight }} gram
                </p>

                <h5 class="fw-bold mt-4">Deskripsi Produk</h5>

                <p class="text-muted">
                    {{ $snack->description }}
                </p>

                <a href="{{ route('snacks.index') }}"
                   class="btn btn-dark mt-3">
                    Kembali ke Semua Produk
                </a>

            </div>
        </div>

    </div>
</div>

@endsection