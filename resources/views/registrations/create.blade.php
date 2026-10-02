@extends('layouts.app')

@section('content')
    <h1>Daftar untuk Kegiatan</h1>

    <form action="{{ route('registrations.store') }}" method="POST">
        @csrf
        <label>Nama Lengkap:</label>
        <input type="text" name="participant_name" value="{{ old('participant_name') }}" required>

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <br><br>
        <button type="submit">Daftar</button>
        <a href="{{ route('activities.index') }}">Batal</a>
    </form>
@endsection
