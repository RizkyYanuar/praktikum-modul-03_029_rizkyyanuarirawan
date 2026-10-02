<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kategori</title>
</head>

<body>
    <h1>Tambah Kategori</h1>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label>Nama Kategori:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <br><br>
        <button type="submit">Simpan</button>
        <a href="{{ route('categories.index') }}">Batal</a>
    </form>
</body>

</html>
