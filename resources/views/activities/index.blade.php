@extends('layouts.app')
@section('content')
    <h1>Daftar Kegiatan</h1>
    <a href="{{ route('activities.create') }}">
        Tambah Aktivitas
    </a>
    <a href="{{ route('categories.index') }}">
        Lihat Kategori
    </a>
    <a href="{{ route('activities.trash') }}">
        Lihat Trash
    </a>
    <form method="GET" action="{{ route('activities.index') }}" style="margin-bottom: 20px;">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kode atau judul...">

        <select name="category_id">
            <option value="">Semua Kategori</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <select name="status">
            <option value="">Semua Status</option>
            <option value="Planned" @selected(request('status') === 'Planned')>Planned</option>
            <option value="Ongoing" @selected(request('status') === 'Ongoing')>Ongoing</option>
            <option value="Done" @selected(request('status') === 'Done')>Done</option>
        </select>

        <select name="sort">
            <option value="terbaru" @selected(request('sort') === 'terbaru')>Start At Terbaru</option>
            <option value="terlama" @selected(request('sort') === 'terlama')>Start At Terlama</option>
        </select>

        <button type="submit">Terapkan Kombinasi Filter</button>
    </form>
    @forelse ($activities as $activity)
        <article class="card">
            <h2><a href="{{ route('activities.show', $activity) }}">
                    {{ $activity->title }}
                </a></h2>
            <p>Kategori: {{ $activity->category->name }} | Status: {{ $activity->status }}</p>

            <!-- Tombol Aksi Sesuai Status -->
            @if ($activity->status === 'Planned')
                <form action="{{ route('activities.publish', $activity) }}" method="POST" style="display:inline;">
                    @csrf @method('PATCH')
                    <button type="submit">Publish</button>
                </form>
            @endif

            @if ($activity->status === 'Ongoing')
                <form action="{{ route('activities.complete', $activity) }}" method="POST" style="display:inline;">
                    @csrf @method('PATCH')
                    <button type="submit">Selesaikan (Complete)</button>
                </form>
                <a href="{{ route('registrations.create', $activity) }}">Register</a>
            @endif
            <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline;"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus aktivitas ini?')">
                @csrf
                @method('DELETE')
                <button type="submit">
                    Hapus
                </button>
            </form>

            <a href="{{ route('activities.edit', $activity) }}">Edit</a>
        </article>
    @empty
        <p>Data tidak ditemukan.</p>
    @endforelse

    <!-- Menampilkan Pagination (Pekerjaan 8) -->
    <div style="margin-top: 20px;">
        {{ $activities->links() }}
    </div>
@endsection
