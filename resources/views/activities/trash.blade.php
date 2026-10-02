@extends('layouts.app')

@section('content')
    <h1>Tempat Sampah Kegiatan</h1>
    <a href="{{ route('activities.index') }}">Kembali ke Daftar Kegiatan</a>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @forelse ($activities as $activity)
        <article class="card">
            <h2>{{ $activity->title }}</h2>
            <p>Kategori: {{ $activity->category->name }} | Dihapus pada: {{ $activity->deleted_at }}</p>
            
            <form action="{{ route('activities.restore', $activity->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">Restore (Pulihkan)</button>
            </form>
        </article>
    @empty
        <p>Tidak ada data di tempat sampah.</p>
    @endforelse
@endsection