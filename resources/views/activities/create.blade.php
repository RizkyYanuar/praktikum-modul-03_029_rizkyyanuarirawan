@extends('layouts.app')

@section('content')
    <h1>Tambah Aktivitas</h1>

    <form action="{{ route('activities.store') }}" method="POST">
        @csrf

        @include('activities._form', [
            'submitLabel' => 'Simpan',
        ])
    </form>

    <a href="{{ route('activities.index') }}">
        Kembali
    </a>
@endsection
