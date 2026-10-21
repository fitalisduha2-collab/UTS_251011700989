@extends('layouts.app')

@section('title', 'Katalog Makanan Kering')

@section('content')

<div class="text-center mb-5">
    <h1 class="fw-bold">Katalog Makanan Kering</h1>
    <p class="text-muted">
        Temukan camilan renyah dan lezat untuk menemani harimu.
    </p>
</div>

<div class="row g-4">
    @forelse ($snacks as $snack)
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm">

                <img
                    src="{{ asset('assets/images/' . $snack->image) }}"
                    class="card-img-top"
                    alt="{{ $snack->name }}"
                    style="height: 230px; object-fit: cover;"
                >

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">
                        {{ $snack->name }}
                    </h5>

                    <p class="text-muted mb-1">
                        Rasa: {{ $snack->flavor }}
                    </p>

                    <p class="text-muted">
                        Berat: {{ $snack->weight }} gram
                    </p>

                    <h5 class="text-danger fw-bold">
                        Rp {{ number_format($snack->price, 0, ',', '.') }}
                    </h5>

                    <p class="card-text">
                        {{ Str::limit($snack->description, 85) }}
                    </p>

                    <a
                        href="{{ route('snacks.show', $snack->id) }}"
                        class="btn btn-dark mt-auto"
                    >
                        Lihat Detail
                    </a>
                </div>

            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <p>Belum ada produk makanan kering.</p>
        </div>
    @endforelse
</div>

@endsection