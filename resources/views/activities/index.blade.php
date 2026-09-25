@extends('layouts.app')
@section('content')
    <h1>Daftar Kegiatan</h1>
    <a href="{{ route('activities.create') }}">
        Tambah Aktivitas
    </a>
    @forelse ($activities as $activity)
        <article class="card">
            <h2>
                <a href="{{ route('activities.show', $activity) }}">
                    {{ $activity->title }}
                </a>
            </h2>
            <p>{{ $activity->activity_date->format('d M Y') }}</p>
            <p>Status: {{ $activity->status }}</p>
            <a href="{{ route('activities.edit', $activity) }}">
                Edit
            </a>

            <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline; margin-left: 0.4rem;"
                onsubmit="return confirm('Yakin ingin menghapus aktivitas ini?')">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </article>
    @empty
        <p>Belum ada kegiatan.</p>
    @endforelse
@endsection
