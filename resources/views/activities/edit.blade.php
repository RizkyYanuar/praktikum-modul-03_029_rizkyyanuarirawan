@extends('layouts.app')

@section('content')

<h1>Edit Aktivitas</h1>

<form
    action="{{ route('activities.update', $activity) }}"
    method="POST"
>
    @csrf
    @method('PUT')

    @include('activities._form', [
        'submitLabel' => 'Update'
    ])
</form>

<a href="{{ route('activities.show', $activity) }}">
    Batal
</a>

@endsection