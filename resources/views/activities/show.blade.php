@extends('layouts.app')

@section('content') <article class="card"> <h1>{{ $activity->title }}</h1>

    <p>
        <strong>Tanggal:</strong>
        {{ $activity->activity_date->format('d M Y') }}
    </p>

    <p>
        <strong>Kategori:</strong>
        {{ $activity->category }}
    </p>

    <p>
        <strong>Status:</strong>
        {{ $activity->status }}
    </p>

    <div>
        <h3>Deskripsi</h3>
        <p>{{ $activity->description }}</p>
    </div>

    <a href="{{ route('activities.index') }}">
        Kembali ke Daftar Kegiatan
    </a>
</article>

@endsection
