@extends('layouts.app')

@section('content')
    <h1>Daftar Kategori</h1>
    @if (session('error'))
        <div style="color: red; padding: 10px; border: 1px solid red; margin-bottom: 10px;">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('categories.create') }}">
        Tambah Kategori
    </a>
    <a href="{{ route('activities.index') }}" style="margin-left: 1rem;">
        Lihat Kegiatan
    </a>

    <br><br>

    @forelse ($categories as $category)
        <article class="card">
            <h2>
                {{ $category->name }}
            </h2>
            
            <a href="{{ route('categories.edit', $category) }}">
                Edit
            </a>

            <form action="{{ route('categories.destroy', $category) }}" method="POST"
                style="display:inline; margin-left: 0.4rem;"
                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>
        </article>
    @empty
        <p>Belum ada kategori.</p>
    @endforelse
@endsection